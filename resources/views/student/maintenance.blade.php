@extends('layouts.student')

@section('title', 'Maintenance Request')

@section('links')
<style>
    /* Style for the card */
    .issue-card {
        position: relative;
        transition: all 0.3s ease;
    }

    .issue-card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Overlay and checkmark icon */
    .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(140, 47, 57, 0.5); /* Updated with #8C2F39 */
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 0.9;
    }

    .card-overlay.show {
        display: flex;
    }

    .check-icon {
        font-size: 40px;
        color: white;
    }

    /* Active Card Style */
    .active-card {
        border-color: #8C2F39; /* Updated with #8C2F39 */
    }

    /* Style for issue image */
    .issue-img {
        max-height: 160px;
        object-fit: contain;
    }

    /* Additional info input style */
    .additional-info {
        display: none;
    }
</style>
@endsection

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <!-- Wrapper for the background with border -->
        <div class="col-md-8">
            <div class="p-4 border rounded shadow-sm bg-white">
                <!-- Maintenance Request Form -->
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Issue Type Selection with Cards -->
                    <div class="row mb-4">
                        <!-- Water and Sanitary Issues Card -->
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card text-center border-primary issue-card" id="water_sanitary_card" style="cursor: pointer;">
                                <div class="card-overlay">
                                    <i class="fa fa-check check-icon"></i>
                                </div>
                                <img src="{{ asset('images/maintenance/water-issues-icon.svg') }}" alt="Water & Sanitary" class="card-img-top p-3 issue-img">
                                <div class="card-body">
                                    <h5 class="card-title">Water & Sanitary</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Electrical Issues Card -->
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card text-center border-primary issue-card" id="electrical_card" style="cursor: pointer;">
                                <div class="card-overlay">
                                    <i class="fa fa-check check-icon"></i>
                                </div>
                                <img src="{{ asset('images/maintenance/electrican-issues-icon.svg') }}" alt="Electrical" class="card-img-top p-3 issue-img">
                                <div class="card-body">
                                    <h5 class="card-title">Electrical</h5>
                                </div>
                            </div>
                        </div>
                        <!-- General Housing Issues Card -->
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card text-center border-primary issue-card" id="housing_card" style="cursor: pointer;">
                                <div class="card-overlay">
                                    <i class="fa fa-check check-icon"></i>
                                </div>
                                <img src="{{ asset('images/maintenance/general-issues-icon.svg') }}" alt="General Housing" class="card-img-top p-3 issue-img">
                                <div class="card-body">
                                    <h5 class="card-title">General Housing</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Issue Details (Conditionally displayed) -->
                    <div id="issue_details" class="mb-3">
                        
                        <!-- Water & Sanitary Issues -->
                        <div id="water_sanitary_issues" class="d-none">
                            <h5><i class="fa fa-tint"></i> Water and Sanitary Issues</h5>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="water_issues[]" value="leakage" id="leakage">
                                <label class="form-check-label" for="leakage">Water Leakage</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="water_issues[]" value="sewage_problem" id="sewage_problem">
                                <label class="form-check-label" for="sewage_problem">Sewage Problem</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="water_issues[]" value="plumbing_problem" id="plumbing_problem">
                                <label class="form-check-label" for="plumbing_problem">Plumbing Problem</label>
                            </div>

                            <!-- Additional Info Button -->
                        <div class="form-group text-start mb-3 mt-3">
                            <button type="button" class="btn btn-secondary" id="additionalInfoBtn">Add Additional Information</button>
                        </div>
                        </div>

                        <!-- Electrical Issues -->
                        <div id="electrical_issues" class="d-none">
                            <h5><i class="fa fa-plug"></i> Electrical Issues</h5>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="electrical_issues[]" value="bulb_replacement" id="bulb_replacement">
                                <label class="form-check-label" for="bulb_replacement">Bulb Replacement</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="electrical_issues[]" value="fan_issue" id="fan_issue">
                                <label class="form-check-label" for="fan_issue">Fan Issue</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="electrical_issues[]" value="water_heater_issue" id="water_heater_issue">
                                <label class="form-check-label" for="water_heater_issue">Water Heater Issue</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="electrical_issues[]" value="electricity_problem" id="electricity_problem">
                                <label class="form-check-label" for="electricity_problem">Electricity Problem</label>
                            </div>

                            <!-- Additional Info Button -->
                        <div class="form-group text-start mb-3 mt-3">
                            <button type="button" class="btn btn-secondary" id="additionalInfoBtn">Add Additional Information</button>
                        </div>
                        </div>

                        <!-- General Housing Issues -->
                        <div id="general_housing_issues" class="d-none">
                            <h5><i class="fa fa-couch"></i> General Housing Issues</h5>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="housing_issues[]" value="furniture_damage" id="furniture_damage">
                                <label class="form-check-label" for="furniture_damage">Furniture Damage</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="housing_issues[]" value="appliance_issue" id="appliance_issue">
                                <label class="form-check-label" for="appliance_issue">Appliance Issue</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="housing_issues[]" value="door_window_issue" id="door_window_issue">
                                <label class="form-check-label" for="door_window_issue">Door/Window Problem</label>
                            </div>

                            <!-- Additional Info Button -->
                        <div class="form-group text-start mb-3 mt-3">
                            <button type="button" class="btn btn-secondary" id="additionalInfoBtn">Add Additional Information</button>
                        </div>

                        </div>

                        
                    </div>

                  
                    <!-- Additional Information Text Input (Initially Hidden) -->
                    <div id="additionalInfoDiv" class="additional-info form-group">
                        <label for="additional_info">Additional Information</label>
                        <textarea class="form-control" id="additional_info" name="additional_info" rows="4" placeholder="Enter any additional details about the issue"></textarea>
                    </div>

                    <!-- Image Upload -->
                    <div class="form-group">
                        <label for="image" class="font-weight-semibold">Attach Image (Optional)</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg mt-3">
                            <i class="fa fa-paper-plane"></i> Submit Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Handle card selection and show corresponding issues
    document.querySelectorAll('.issue-card').forEach(function(card) {
        card.addEventListener('click', function() {
            var issueType = this.id.replace('_card', '');
            showIssueDetails(issueType);
            highlightSelectedCard(this);  // Highlight selected card with overlay and checkmark
        });
    });

    // Function to show the issue details based on selected card
    function showIssueDetails(issueType) {
        // Hide all issue sections
        document.getElementById('water_sanitary_issues').classList.add('d-none');
        document.getElementById('electrical_issues').classList.add('d-none');
        document.getElementById('general_housing_issues').classList.add('d-none');

        // Show the relevant issue section
        if (issueType === 'water_sanitary') {
            document.getElementById('water_sanitary_issues').classList.remove('d-none');
        } else if (issueType === 'electrical') {
            document.getElementById('electrical_issues').classList.remove('d-none');
        } else if (issueType === 'housing') {
            document.getElementById('general_housing_issues').classList.remove('d-none');
        }
    }

    // Function to highlight the selected card
    function highlightSelectedCard(card) {
        // Remove active state from all cards
        document.querySelectorAll('.issue-card').forEach(function(card) {
            card.classList.remove('active-card');
            card.querySelector('.card-overlay').classList.remove('show');
        });

        // Add active state to the selected card
        card.classList.add('active-card');
        card.querySelector('.card-overlay').classList.add('show');
    }

    // Toggle additional information text area
    document.getElementById('additionalInfoBtn').addEventListener('click', function() {
        var additionalInfoDiv = document.getElementById('additionalInfoDiv');
        additionalInfoDiv.classList.toggle('additional-info'); // Toggle visibility
    });
</script>
@endsection
