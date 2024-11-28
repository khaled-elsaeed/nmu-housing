<?php
namespace App\Http\Controllers\Admin\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Document;

use App\Exports\Applicants\ApplicantDocumentsExport;
use Illuminate\Support\Facades\Log;

class ApplicantDocumentController extends Controller
{
    public function index()
{
    try {
        

        return view(
            'admin.applicant.document');
    } catch (\Exception $e) {
        Log::error('Error displaying applicant documents page', [
            'exception' => $e->getMessage(),
            'stack_trace' => $e->getTraceAsString(),
        ]);
        return response()->view('errors.505');
    }
}


    private function countByGender($applicants, $gender)
    {
        return $applicants
            ->filter(function ($applicant) use ($gender) {
                return strtolower($applicant->gender) === strtolower($gender);
            })
            ->count();
    }

    // Count the number of documents with a given status
    private function countByDocumentStatus($applicants, $status)
    {
        return $applicants
            ->filter(function ($applicant) use ($status) {
                return $applicant->documents->first() && strtolower($applicant->documents->first()->status) === strtolower($status);
            })
            ->count();
    }

    // Count by gender and document status
    private function countByGenderAndDocumentStatus($applicants, $gender, $status)
    {
        return $applicants
            ->filter(function ($applicant) use ($gender, $status) {
                return strtolower($applicant->gender) === strtolower($gender) && 
                    $applicant->documents->first() && 
                    strtolower($applicant->documents->first()->status) === strtolower($status);
            })
            ->count();
    }

    private function fetchApplicants()
    {
        try {
            return User::role('resident')
                ->whereHas('documents')
                ->with(['documents'])    // Load documents relation
                ->orderBy('created_at', 'desc')
                ->get()
                ->map(function ($applicant) {
                    $applicant->has_student_profile = $applicant->hasStudentProfile();
                    $applicant->gender = optional($applicant->student)->gender ?? 'N/A'; // Keep gender if needed
                    return $applicant;
                });
        } catch (\Exception $e) {
            Log::error('Error fetching applicants', [
                'exception' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return collect();
        }
    }

    public function downloadApplicantDocumentsExcel()
    {
        try {
            $export = new ApplicantDocumentsExport();
            return $export->downloadExcel();
        } catch (\Exception $e) {
            Log::error('Error exporting applicants to Excel', [
                'exception' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return response()->json(['error' => 'Failed to export applicants to Excel'], 500);
        }
    }

    public function show($id)
    {
        try {
            $applicant = User::find($id);

            if (!$applicant) {
                return response()->json(['error' => 'Applicant not found', 'user' => $id], 404);
            }

            $details = [
                'faculty' => $applicant->student->faculty->name_en ?? 'Not available',
                'program' => $applicant->student->program->name_en ?? 'Not available',
                'score' => $applicant->student->universityArchive->score ?? 'Not available',
                'percent' => $applicant->student->universityArchive->percent ?? 'Not available',
                'governorate' => $applicant->student->governorate->name_ar ?? 'Not available',
                'city' => $applicant->student->city->name_ar ?? 'Not available',
                'street' => $applicant->student->street ?? 'Not available',
            ];
            
            return response()->json([
                'success' => true,
                'data' => $details
            ]);
        } catch (\Exception $e) {
            Log::error('Error fetching applicant details', [
                'exception' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
                'applicant_id' => $id
            ]);

            return response()->json(['error' => 'Applicant not found or an error occurred', 'user' => $id], 404);
        }
    }

    public function getDocuments($id)
    {
        $documents = Document::where('user_id', $id)->get(['document_path']);
    
        return response()->json([
            'documents' => $documents
        ]);
    }
    

}



