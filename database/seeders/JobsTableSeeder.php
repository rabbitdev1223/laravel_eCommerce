<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jobs')->delete();
        
        \DB::table('jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Motor Rewind Supervisor',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:44',
                'updated_at' => '2021-04-12 06:04:44',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Motor Rewind Technician',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:44',
                'updated_at' => '2021-04-12 06:04:44',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'General Office',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:44',
                'updated_at' => '2021-04-12 06:04:44',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Wind Energy Service Technician 1',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Department Manager Repair',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Account Manager II',
                'job_type_id' => 4,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Janitor',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Motor Vibration Analyst-Service',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Logistics Supervisor II',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Motor Mechanic 3',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Motor Mechanic Helper',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Logistics Supervisor',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Truck Driver',
                'job_type_id' => 5,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Chief Operating Officer',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Project Contract Admin Repair I',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'Plant Manager',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'Technical Advisor',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'Project Contract Admin Service I',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'Machinist',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'Motor Mechanic 1',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            20 => 
            array (
                'id' => 21,
                'title' => 'Machinist Supervisor',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'Project Contract Admin Sales I',
                'job_type_id' => 6,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            22 => 
            array (
                'id' => 23,
                'title' => 'Account Manager III',
                'job_type_id' => 4,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            23 => 
            array (
                'id' => 24,
                'title' => 'Logistics Coordinator',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            24 => 
            array (
                'id' => 25,
                'title' => 'Motor Detailer',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            25 => 
            array (
                'id' => 26,
                'title' => 'Project Contract Admin Sales 1',
                'job_type_id' => 6,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            26 => 
            array (
                'id' => 27,
                'title' => 'Industrial Electronics Service Technician',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            27 => 
            array (
                'id' => 28,
                'title' => 'Switchgear Field Service Technician',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            28 => 
            array (
                'id' => 29,
                'title' => 'Wind Energy Service Supervisor',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            29 => 
            array (
                'id' => 30,
                'title' => 'Motor Mechanic 2',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            30 => 
            array (
                'id' => 31,
                'title' => 'Millwright',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            31 => 
            array (
                'id' => 32,
                'title' => 'Office Administrator',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            32 => 
            array (
                'id' => 33,
                'title' => 'Human Resources Generalist',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            33 => 
            array (
                'id' => 34,
                'title' => 'Industrial Electronics Service Techician',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            34 => 
            array (
                'id' => 35,
                'title' => 'Project Contract Admin Sales 2',
                'job_type_id' => 6,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            35 => 
            array (
                'id' => 36,
                'title' => 'Field Service Technician 1',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            36 => 
            array (
                'id' => 37,
                'title' => 'Vice President of Business Development',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            37 => 
            array (
                'id' => 38,
                'title' => 'Plant Manager',
                'job_type_id' => 6,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            38 => 
            array (
                'id' => 39,
                'title' => 'Receptionist',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            39 => 
            array (
                'id' => 40,
                'title' => 'Department Manager Sales',
                'job_type_id' => 6,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            40 => 
            array (
                'id' => 41,
                'title' => 'IT Software Trainer II',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            41 => 
            array (
                'id' => 42,
                'title' => 'Founder',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            42 => 
            array (
                'id' => 43,
                'title' => 'Project Contract Admin Repair I',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            43 => 
            array (
                'id' => 44,
                'title' => 'Department Manager Service',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            44 => 
            array (
                'id' => 45,
                'title' => 'Project Contract Admin Sales II',
                'job_type_id' => 6,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            45 => 
            array (
                'id' => 46,
                'title' => 'Project Contract Engineer',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            46 => 
            array (
                'id' => 47,
                'title' => 'Motor Mechanic III',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            47 => 
            array (
                'id' => 48,
                'title' => 'Production Supervisor Repair',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            48 => 
            array (
                'id' => 49,
                'title' => 'Production Supervisor / Service',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            49 => 
            array (
                'id' => 50,
                'title' => 'Circuit Breaker Technician',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            50 => 
            array (
                'id' => 51,
                'title' => 'Accounts Payable',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            51 => 
            array (
                'id' => 52,
                'title' => 'Shipping and Receiving',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            52 => 
            array (
                'id' => 53,
                'title' => 'Production Supervisor / Repair',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            53 => 
            array (
                'id' => 54,
                'title' => 'Procurement and Product Development',
                'job_type_id' => 6,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            54 => 
            array (
                'id' => 55,
                'title' => 'Production Supervisor / Repair',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            55 => 
            array (
                'id' => 56,
                'title' => 'Human Resources Manager',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            56 => 
            array (
                'id' => 57,
                'title' => 'Department Manager Service',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            57 => 
            array (
                'id' => 58,
                'title' => 'Wind Energy Technician 1',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            58 => 
            array (
                'id' => 59,
                'title' => 'Project Contract Admin Repair II',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            59 => 
            array (
                'id' => 60,
                'title' => 'Vice President of Sales',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            60 => 
            array (
                'id' => 61,
                'title' => 'Industrial Electronics Service Technician 2',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            61 => 
            array (
                'id' => 62,
                'title' => 'Field Service Technician II',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            62 => 
            array (
                'id' => 63,
                'title' => 'Medium Voltage Drive Specialist',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            63 => 
            array (
                'id' => 64,
                'title' => 'Repair Shop Supervisor',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            64 => 
            array (
                'id' => 65,
                'title' => 'Motor Rewind Helper',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            65 => 
            array (
                'id' => 66,
                'title' => 'General Accounting Clerk',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            66 => 
            array (
                'id' => 67,
                'title' => 'Project Contract Admin Repair 1',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            67 => 
            array (
                'id' => 68,
                'title' => 'Crane and Compressor Technician',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            68 => 
            array (
                'id' => 69,
                'title' => 'Wind Energy Service Technician 2',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            69 => 
            array (
                'id' => 70,
                'title' => 'Quality - Safety & Fleet Manager',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            70 => 
            array (
                'id' => 71,
                'title' => 'Motor Balance Technician',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            71 => 
            array (
                'id' => 72,
                'title' => 'Director of IT',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            72 => 
            array (
                'id' => 73,
                'title' => 'Motor Mechanic Supervisor',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            73 => 
            array (
                'id' => 74,
                'title' => 'Shipping and Receiving',
                'job_type_id' => 6,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            74 => 
            array (
                'id' => 75,
                'title' => 'Testing Technician',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            75 => 
            array (
                'id' => 76,
                'title' => 'Industrial Electronics Service Technition 2',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            76 => 
            array (
                'id' => 77,
                'title' => 'Fabricator',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            77 => 
            array (
                'id' => 78,
                'title' => 'Project Contract Admin Service',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            78 => 
            array (
                'id' => 79,
                'title' => 'QA/QC Technician',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            79 => 
            array (
                'id' => 80,
                'title' => 'Millwright-Service',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            80 => 
            array (
                'id' => 81,
                'title' => 'Industry Product Specialist',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            81 => 
            array (
                'id' => 82,
                'title' => 'Director of Marketing',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            82 => 
            array (
                'id' => 83,
                'title' => 'Account Manager I',
                'job_type_id' => 4,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            83 => 
            array (
                'id' => 84,
                'title' => 'Logistics Coordinator',
                'job_type_id' => 5,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            84 => 
            array (
                'id' => 85,
                'title' => 'Accounts Receivable',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            85 => 
            array (
                'id' => 86,
                'title' => 'IT Help Desk and Support',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            86 => 
            array (
                'id' => 87,
                'title' => 'Accounting/Finance Manager',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            87 => 
            array (
                'id' => 88,
                'title' => 'Director of Sales',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            88 => 
            array (
                'id' => 89,
                'title' => 'Accounts Payable Assistant',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            89 => 
            array (
                'id' => 90,
                'title' => 'Industry Specialist: Reliability and Predictive Maintenance',
                'job_type_id' => 3,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            90 => 
            array (
                'id' => 91,
                'title' => 'President',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            91 => 
            array (
                'id' => 92,
                'title' => 'Senior Vice President',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            92 => 
            array (
                'id' => 93,
                'title' => 'Co-Owner',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            93 => 
            array (
                'id' => 94,
                'title' => 'Chief Executive Officer',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            94 => 
            array (
                'id' => 95,
                'title' => 'Department Manager / Repair & Service',
                'job_type_id' => 1,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            95 => 
            array (
                'id' => 96,
                'title' => 'Production Supervisor / Service',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            96 => 
            array (
                'id' => 97,
                'title' => 'Department Manager / Repair & Service',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            97 => 
            array (
                'id' => 98,
                'title' => 'Chief Financial Officer',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
            98 => 
            array (
                'id' => 99,
                'title' => 'Wind Energy Service Manager',
                'job_type_id' => 2,
                'created_at' => '2021-04-12 06:04:45',
                'updated_at' => '2021-04-12 06:04:45',
            ),
        ));
        
        
    }
}