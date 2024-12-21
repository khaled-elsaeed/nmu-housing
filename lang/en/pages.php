<?php

return [
    'general' => [
        'notifications' => 'Notifications',
        'no_new_notifications' => 'No new notifications',
        'my_profile' => 'My Profile',
        'logout' => 'Logout',
        'are_you_sure_logout' => 'Are you sure you want to logout?',
    ],
    "admin" => [
        "general" => [
            "never" => "Never",
            "minutes_ago" => ":minutes minutes ago",
            "hours_ago" => ":hours hours ago",
            "hours_and_minutes_ago" => ":hours hours and :minutes minutes ago",
            "days_ago" => ":days days ago",
            "males" => "Males",
            "females" => "Females",
        ],
        "sidebar" => [
            "dashboard" => "Dashboard",
            "applicants" => "Applicants",
            "invoices" => "Invoices",
            "reservation" => "Reservation",
            "view_reservation" => "View Reservation",
            "relocation" => "Relocation",
            "residents" => "Residents",
            "view_residents" => "View Residents",
            "add_resident" => "Add Resident",
            "housing" => "Housing",
            "view_buildings" => "View Buildings",
            "view_apartments" => "View Apartments",
            "view_rooms" => "View Rooms",
            "maintenance" => "Maintenance",
            "permissions" => "Permissions",
            "accounts_management" => "Accounts Management",
            "students" => "Students",
            "admins" => "Admins",
            "settings" => "Settings",
            "logout_confirmation" => "Are you sure you want to logout?",
        ],
        "home" => [
            "welcome_message" => "Welcome to the Admin Dashboard",
            "total_students" => "Total Students",
            "occupancy_rate" => "Occupancy Rate",
            "loading" => "Loading...",
            "buildings" => "Buildings",
            "slick" => [
                "building" => "Building",
                "occupied" => "Occupied",
                "total_bedrooms" => "Total Bedrooms",
                "empty" => "Empty",
                "occupied" => "Occupied",
                "bedrooms_occupied" => "Bedrooms Occupied",
            ],
        ],
        "applicants" => [
            'Applicant Details' => 'Applicant Details',
            "Applicants" => "Applicants",
            "Pending" => "Pending",
            "Preliminary Accepted" => "Preliminary Accepted",
            "Final Accepted" => "Final Accepted",
            "Name" => "Name",
            "National ID" => "National ID",
            "Faculty" => "Faculty",
            'Program' => 'Program',
            'Score' => 'Score',
            'Percent' => 'Percent',
            'Governorate' => 'Governorate',
            'City' => 'City',
            'Street' => 'Street',
            "Email" => "Email",
            "Mobile" => "Mobile",
            "Registration Date" => "Registration Date",
            "Actions" => "Actions",
            "Search..." => "Search...",
            "Loading..." => "Loading...",
            "Male" => "Male",
            "Female" => "Female",
            "Close" => "Close",
            "Download" => "Download",
            "Applicants (Excel)" => "Applicants (Excel)",
            "invoices" => [
                "applicants_payments" => "Payments",
                "total_invoices" => "Total Invoices",
                "loading" => "Loading...",
                "males" => "Males",
                "females" => "Females",
                "paid_invoices" => "Paid Invoices",
                "unpaid_invoices" => "Unpaid Invoices",
                "accepted_payments" => "Accepted Payments",
                "Search..." => "Search...",
                "Select Gender" => "Select Gender",
                "Male" => "Male",
                "Female" => "Female",
                "Download Options" => "Download Options",
                "Download" => "Download",
                "Applicants (Excel)" => "Applicants (Excel)",
                "Name" => "Name",
                "National ID" => "National ID",
                "Faculty" => "Faculty",
                "Mobile" => "Mobile",
                "Invoice Status" => "Invoice Status",
                "Payment Status" => "Payment Status",
                "Actions" => "Actions",
                "close" => "Close",
                "applicant_payments" => "Applicant Payments",
                "invoice_status" => [
                    "paid" => "Paid",
                    "unpaid" => "Unpaid",
                    "pending" => "Pending",
                ],
                "payment_status" => [
                    "pending" => "Pending",

                    "paid" => "Paid",
                    "unpaid" => "Unpaid",
                    "no_payment" => "No Payment",
                ],
                "More_Details" => "More Details",
            ],
        ],
        'reservation' => [
            'title' => 'Reservations',
            'total_reservations' => 'Total Reservations',
            'pending_reservations' => 'Pending Reservations',
            'confirmed_reservations' => 'Confirmed Reservations',
            'cancelled_reservations' => 'Cancelled Reservations',
            'male' => 'Male',
            'female' => 'Female',
            'search_placeholder' => 'Search by name or ID',
            'details_modal_title' => 'Reservation Details',
            'room' => 'Room',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'status' => 'Status',
            'close' => 'Close',
            'download' => 'Download',
            'excel' => 'Excel',
            'reservation_id' => 'Reservation ID',
            'name' => 'Name',
            'location' => 'Location',
            'loading' => 'Loading...',
            'statuses' => [
                "pending" => "Pending",
                "confirmed" => "Confirmed",
                "completed" => "Completed",
                "cancelled" => "Cancelled",
                "expired" => "Expired",
            ],
            'relocation' => [
                'title' => 'Reservation Relocation',
                'choose_action' => 'Choose whether to relocate to an empty room or swap rooms with another resident.',
                'relocate_empty_room' => 'Relocate to an Empty Room',
                'swap_rooms' => 'Swap Rooms with Another Resident',
                'resident_nid' => 'Resident National ID',
                'select_building' => 'Select Building',
                'select_apartment' => 'Select Apartment',
                'select_new_room' => 'Select New Room',
                'relocate_button' => 'Relocate Resident',
                'swap_button' => 'Swap Residents',
            ],
        ],
        'resident' => [
            'title' => 'Residents Management',
            'summary' => [
                'title' => 'Total Residents',
                'male' => 'Total Male Residents',
                'female' => 'Total Female Residents',
            ],
            'loading' => 'Loading...',
            'header' => 'Residents',
            'download' => 'Download',
            'download_excel' => 'Download Excel',
            'search' => 'Search for residents...',
            'table' => [
                'name' => 'Name',
                'national_id' => 'National ID',
                'location' => 'Location',
                'faculty' => 'Faculty',
                'mobile' => 'Mobile',
                'registration_date' => 'Registration Date',
                'actions' => 'Actions',
            ],
            'modal' => [
                'title' => 'Resident Details',
                'faculty' => 'Faculty',
                'program' => 'Program',
                'score' => 'Score',
                'percent' => 'Percentage',
                'governorate' => 'Governorate',
                'city' => 'City',
                'street' => 'Street',
                'close' => 'Close',
            ],
        ],
        'buildings' => [
            'title' => 'Buildings',
            'total_buildings' => 'Total Buildings',
            'loading' => 'Loading...',
            'active' => 'Active',
            'inactive' => 'Inactive',
            'male_buildings' => 'Male Buildings',
            'female_buildings' => 'Female Buildings',
            'under_maintenance' => 'Under Maintenance',
            'males' => 'Males',
            'females' => 'Females',
            'gender' => 'Gender',
            'status' => 'Status',
            'search' => 'Search...',
            'add_building' => 'Add Building',
            'download' => 'Download',
            'building_excel' => 'Building Excel',
            'building_number' => 'Building Number',
            'max_apartments' => 'Max Apartments',
            'description' => 'Description',
            'actions' => 'Actions',
            'create_building' => 'Create Building',
            'save_building' => 'Save Building',
            'close' => 'Close',
            'edit_status' => 'Edit Status',
            'save_status' => 'Save Status',
            'edit_note' => 'Edit Note',
            'save_note' => 'Save Note',
            'note' => 'Note',
            'male' => 'Male',
            'female' => 'Female',
        ],
        'apartment' => [
            'title' => 'Apartments Overview',
            'total_apartments' => 'Total Apartments',
            'occupied' => 'Occupied',
            'empty' => 'Empty',
            'male_apartments' => 'Male Apartments',
            'female_apartments' => 'Female Apartments',
            'under_maintenance' => 'Under Maintenance',
            'partially_occupied' => 'Partially Occupied',
            'males' => 'Males',
            'females' => 'Females',
            'apartments' => 'Apartments',
            'search_placeholder' => 'Search apartments...',
            'select_building' => 'Select Building',
            'building' => 'Building',
            'status' => 'Status',
            'active' => 'Active',
            'inactive' => 'Inactive',
            'export_excel' => 'Export to Excel',
            'notes' => 'Notes',
            'actions' => 'Actions',
            'apartment_number' => 'Apartment Number',
            'building_number' => 'Building Number',
            'gender' => 'Gender',
            'max_rooms' => 'Max Rooms',
            'no_description' => 'No description available',
            'edit_note' => 'Edit Note',
            'edit_status' => 'Edit Status',
            'delete_apartment' => 'Delete Apartment',
            'edit_apartment_status' => 'Edit Apartment Status',
            'close' => 'Close',
            'save_status' => 'Save Status',
            'edit_add_apartment_note' => 'Edit/Add Apartment Note',
            'save_note' => 'Save Note',
        ],
        'rooms' => [
            'room' => 'room',
            'total_rooms' => 'Total Rooms',
            'single_rooms' => 'Single Rooms',
            'double_rooms' => 'Double Rooms',
            'under_maintenance' => 'Under Maintenance',
            'room_number' => 'Room Number',
            'apartment' => 'Apartment',
            'building_number' => 'Building Number',
            'room_purpose' => 'Room Purpose',
            'type' => 'Type',
            'status' => 'Status',
            'max_occupancy' => 'Max Occupancy',
            'current_occupancy' => 'Current Occupancy',
            'description' => 'Description',
            'actions' => 'Actions',
            'occupied' => 'Occupied',
            'empty' => 'Empty',
            'partially_occupied' => 'Partially Occupied',
            'edit_note' => 'Edit Note',
            'edit_status' => 'Edit Status',
            'delete_room' => 'Delete Room',
            'edit_room_details' => 'Edit Room Details',
            'room_status' => [
                'active' => 'Active',
                'inactive' => 'Inactive',
                'under_maintenance' => 'Under Maintenance',
            ],
            'room_purposes' => [
                'accommodation' => 'Accommodation',
                'office' => 'Office',
                'utility' => 'Utility',
            ],
            'room_type' => [
                'single' => 'Single',
                'double' => 'Double',
            ],
            'active' => 'Active',
            'inactive' => 'Inactive',
            'under_maintenance_status' => 'Under Maintenance',
            'save_changes' => 'Save Changes',
            'close' => 'Close',
            'save_note' => 'Save Note',
            'no_description' => 'No Description Available',
            'search' => 'Search Rooms',
            'select_building' => 'Select Building',
            'select_apartment' => 'Select Apartment',
            'rooms_excel' => 'Download Rooms Excel',
            'males' => 'Males',
            'females' => 'Females',
            'students' => 'Students',
            'student' => 'Student',
            'edit_add_room_note' => 'Edit/Add Room Note',
            'building' => 'Building',
            'n/a' => 'N/A', // Not Available
        ],
        'maintenance' => [
            'title' => 'Maintenance Dashboard',
            'total_requests' => 'Total Maintenance Requests',
            'male' => 'Male',
            'female' => 'Female',
            'pending_requests' => 'Pending Maintenance Requests',
            'completed_requests' => 'Completed Maintenance Requests',
            'rejected_requests' => 'Rejected Maintenance Requests',
            'page_title' => 'Maintenance Requests',
            'toggle_filter' => 'Toggle Filters',
            'download' => 'Download',
            'export_excel' => 'Export to Excel',
            'search_placeholder' => 'Search by student, location, or issue type',
            'filter_by_status' => 'Filter by Status',
            'pending' => 'Pending',
            'completed' => 'Completed',
            'rejected' => 'Rejected',
            'no' => 'No.',
            'student_name' => 'Student Name',
            'location' => 'Location',
            'issue_type' => 'Issue Type',
            'description' => 'Description',
            'status' => 'Status',
            'actions' => 'Actions',
            'building' => 'Building :building',
            'apartment' => 'Apartment :apartment',
            'room' => 'Room :room',
            'issues' => 'Issues',
            'unknown_issue' => 'Unknown Issue',
            'no_description' => 'No Description',
            'status_pending' => 'Pending',
            'status_accepted' => 'In Progress',
            'status_rejected' => 'Rejected',
            'complete_request' => 'Complete',
            'complete' => 'Complete',
            'status_completed' => 'Completed',
            'completed_at' => 'Completed on :date',
            'additional_info' => 'Additional Info ',

            'accepted_at' => 'Accepted at :date',
            'rejected_at' => 'Rejected at :date',
            'accept_request' => 'Accept Request',
            'reject_request' => 'Reject Request',
            'accept' => 'Accept',
            'reject' => 'Reject',
            'view' => 'View Details',
        ],
        'permission' => [
            'title' => 'Permission Requests',
            'total_requests' => 'Total Requests',
            'pending_requests' => 'Pending Requests',
            'approved_requests' => 'Approved Requests',
            'rejected_requests' => 'Rejected Requests',
            'male' => 'Male',
            'female' => 'Female',
            'pending' => 'Pending',
            'approved' => 'Approved',
            'rejected' => 'Rejected',
            'no' => 'No',
            'student_name' => 'Student Name',
            'permission_type' => 'Permission Type',
            'reason' => 'Reason',
            'status' => 'Status',
            'actions' => 'Actions',
            'approve' => 'Approve',
            'reject' => 'Reject',
            'view' => 'View',
            'filter_by_status' => 'Filter by Status',
            'search_placeholder' => 'Search by Student Name or Permission Type...',
            'download' => 'Download',
            'export_excel' => 'Export to Excel',
            'no_reason_provided' => 'No reason provided',
            'request_details' => 'Request Details',
            'close' => 'Close',
        ],
        'account' => [
            'accounts_management' => 'Accounts Management',
            'total_students' => 'Total Students',
            'male' => 'Male',
            'female' => 'Female',
            'student_accounts' => 'Student Accounts',
            'no' => 'No.',
            'student_name' => 'Student Name',
            'national_id' => 'National ID',
            'email' => 'Email',
            'status' => 'Status',
            'actions' => 'Actions',
            'active' => 'Active',
            'inactive' => 'Inactive',
            'reset_email' => 'Reset Email',
            'reset_password' => 'Reset Password',
            'edit_student' => 'Edit Student',
            'reset_email_modal_title' => 'Reset Student\'s Email',
            'new_email_address' => 'New Email Address',
            'reset_password_modal_title' => 'Reset Student\'s Password',
            'new_password' => 'New Password',
            'confirm_password' => 'Confirm Password',
            'no_email' => 'No Email',
        ],
    ],
    'student' => [
        'home' => [
            'welcome_message' => 'We’re glad to have you. Check out your active reservation below.',
            'active_reservation' => 'Active Reservation',
            'building' => 'Building',
            'apartment' => 'Apartment',
            'room' => 'Room',
            'status' => 'Status',
            'term' => 'Term',
            'year' => 'Year',
            'no_active_reservation' => 'No Active reservations at the moment.',
            'create_new_reservation' => 'Create a New Reservation',
        ],
        'sidebar' => [
            'home' => 'Home',
            'maintenance' => 'Maintenance',
            'permissions' => 'Permissions',
            'my_profile' => 'My Profile',
        ],
        'profile' => [
        'profile' => 'Profile',
        'address' => 'Address',
        'academic_info' => 'Academic Info',
        'parent_info' => 'Parent Info',
        'sibling_info' => 'Sibling Info',
        'emergency_info' => 'Emergency Info',
        'my_profile' => 'My Profile',
        'edit_profile_information' => 'Edit Profile Information',
        'change_picture' => 'Change Picture',
        'delete_picture' => 'Delete Picture',
        'change_profile_picture' => 'Change Profile Picture',
        'select_new_picture' => 'Select New Picture',
        'upload_new_picture' => 'Upload New Picture',
        'first_name' => 'First Name',
        'last_name' => 'Last Name',
        'email' => 'Email',
        'change_password' => 'Change Password',
        'password' => 'Password',
        'enter_new_password' => 'Enter New Password',
        'confirm_password' => 'Confirm Password',
        'confirm_new_password' => 'Confirm New Password',
        'update' => 'Update',
        'my_address' => 'My Address',
        'governorate' => 'Governorate',
        'city' => 'City',
        'street' => 'Street',
        'academic_info' => 'Academic Information',
        'manage_academic_details' => 'Manage your academic details',
        'faculty' => 'Faculty',
        'program' => 'Program',
        'parent_info' => 'Parent Information',
        'parent_name' => 'Parent Name',
        'parent_relation' => 'Parent Relation',
        'parent_email' => 'Parent Email',
        'parent_mobile' => 'Parent Mobile',
        'living_abroad' => 'Living Abroad',
        'yes' => 'Yes',
        'no' => 'No',
        'no_parent_info' => 'No parent information available.',
        'sibling_info' => 'Sibling Information',
        'sibling_gender' => 'Sibling Gender',
        'brother' => 'Brother',
        'sister' => 'Sister',
        'sibling_name' => 'Sibling Name',
        'sibling_national_id' => 'Sibling National ID',
        'sibling_faculty' => 'Sibling Faculty',
        'no_sibling_info' => 'No sibling information available.',
        'emergency_info' => 'Emergency Information',
        'emergency_contact_name' => 'Emergency Contact Name',
        'emergency_phone' => 'Emergency Phone',
        'relationship' => 'Relationship',
        'uncle' => 'Uncle',
        'aunt' => 'Aunt',
        'grandparent' => 'Grandparent',
        'other' => 'Other',
        'spouse' => 'Spouse',
        'nephew' => 'Nephew',
        'cousin' => 'Cousin',
        'niece' => 'Niece',
        'no_emergency_info' => 'No emergency contact information available.',
        'save_changes' => 'Save Changes',
        'save_emergency_info' => 'Save Emergency Contact Info',
        'cancel_password_change' => 'Cancel Password Change',
        'change_password' => 'Change Password',
        'payments_info' => 'Payments Info',
            'invoice_number' => 'Invoice Number',
            'amount' => 'Amount',
            'status' => 'Status',
            'upload_payment' => 'Upload Payment',
            'payment_date' => 'Payment Date',
            'payment_receipt' => 'Payment Receipt',
            'view_receipt' => 'View Receipt',
            'no_invoices' => 'No invoices available.',
            'reservation' => 'Reservation',
            'year' => 'Year',
            'term' => 'Term',
            'paid' => 'Paid',
            'unpaid' => 'Unpaid',
        ],
        'maintenance' => [
            'title' => 'Maintenance Request',
            'water_sanitary' => 'Water & Sanitary',
            'electrical' => 'Electrical',
            'general_housing' => 'General Housing',
            'water_sanitary_issues' => 'Water and Sanitary Issues',
            'electrical_issues' => 'Electrical Issues',
            'general_housing_issues' => 'General Housing Issues',
            'water_leakage' => 'Water Leakage',
            'sewage_problem' => 'Sewage Problem',
            'plumbing_problem' => 'Plumbing Problem',
            'bulb_replacement' => 'Bulb Replacement',
            'fan_issue' => 'Fan Issue',
            'water_heater_issue' => 'Water Heater Issue',
            'electricity_problem' => 'Electricity Problem',
            'furniture_damage' => 'Furniture Damage',
            'appliance_issue' => 'Appliance Issue',
            'door_window_issue' => 'Door/Window Problem',
            'additional_info' => 'Additional Information',
            'enter_additional_details' => 'Enter any additional details about the issue',
            'upload_text' => 'Drag & drop an image here, or <span class="upload-link">browse</span>',
            'uploaded_image' => 'Uploaded Image',
            'submit_request' => 'Submit Request',
        ]

    ]
];
