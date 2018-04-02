<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'username' => 'admin',
            'email' => 'daniel@gmail.com',
            'password' => bcrypt('password'),
            'avatar' => 'default_avatar.jpg',
            'avatar_url' => 'http://res.cloudinary.com/dvvvmbbei/image/upload/c_fit,h_200,w_200/gvatsjk6v0sr2jezzksw.png',
        ]);

        DB::table('departments')->insert(
        	array(
                [
    	            'name' => 'Gynaecology',
    	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id soluta impedit placeat sit odio. Itaque officiis, animi voluptatem voluptatum aut veniam magnam, cupiditate provident facere temporibus saepe modi commodi, debitis.',
    	        ],
    	        [
    	            'name' => 'Anathestic',
    	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id soluta impedit placeat sit odio. Itaque officiis, animi voluptatem voluptatum aut veniam magnam, cupiditate provident facere temporibus saepe modi commodi, debitis.',
    	        ],
    	        [
    	            'name' => 'Uronology',
    	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id soluta impedit placeat sit odio. Itaque officiis, animi voluptatem voluptatum aut veniam magnam, cupiditate provident facere temporibus saepe modi commodi, debitis.',
    	        ]
            )
	    );

        DB::table('users')->insert(
            array(
                [
                    'name' => 'Daniel Alabuja',
                    'email' => 'doctor@gmail.com',
                    'phone_number' => '0816343037',
                    'password' => bcrypt('password'),
                    'address' => '53 Joshua Streets Ajegunle, Lagos',
                    'role' => 'doctor',
                    'department_id' => 1,
                    'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum enim quo amet, praesentium blanditiis quas error recusandae iure, omnis nisi deserunt officiis repellat? Quia enim voluptas, soluta id non aliquam?',
                    'linkedin_url' => '',
                    'facebook_url' => '',
                    'twitter_url' => '',
                    'avatar' => 'default_avatar.jpg',
                    'avatar_url' => 'http://res.cloudinary.com/dvvvmbbei/image/upload/c_fit,h_200,w_200/gvatsjk6v0sr2jezzksw.png',
                ],

                [
                    'name' => 'Daniel Alabuja',
                    'email' => 'nurse@gmail.com',
                    'phone_number' => '0816343036',
                    'password' => bcrypt('password'),
                    'address' => '53 Joshua Streets Ajegunle, Lagos',
                    'role' => 'nurse',
                    'department_id' => 1,
                    'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum enim quo amet, praesentium blanditiis quas error recusandae iure, omnis nisi deserunt officiis repellat? Quia enim voluptas, soluta id non aliquam?',
                    'linkedin_url' => '',
                    'facebook_url' => '',
                    'twitter_url' => '',
                    'avatar' => 'default_avatar.jpg',
                    'avatar_url' => 'http://res.cloudinary.com/dvvvmbbei/image/upload/c_fit,h_200,w_200/gvatsjk6v0sr2jezzksw.png',
                ],

                [
                    'name' => 'Daniel Alabuja',
                    'email' => 'pharmacist@gmail.com',
                    'phone_number' => '0816343035',
                    'password' => bcrypt('password'),
                    'address' => '53 Joshua Streets Ajegunle, Lagos',
                    'role' => 'pharmacist',
                    'department_id' => 2,
                    'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum enim quo amet, praesentium blanditiis quas error recusandae iure, omnis nisi deserunt officiis repellat? Quia enim voluptas, soluta id non aliquam?',
                    'linkedin_url' => '',
                    'facebook_url' => '',
                    'twitter_url' => '',
                    'avatar' => 'default_avatar.jpg',
                    'avatar_url' => 'http://res.cloudinary.com/dvvvmbbei/image/upload/c_fit,h_200,w_200/gvatsjk6v0sr2jezzksw.png',
                ],

                [
                    'name' => 'Daniel Alabuja',
                    'email' => 'accountant@gmail.com',
                    'phone_number' => '0816343034',
                    'password' => bcrypt('password'),
                    'address' => '53 Joshua Streets Ajegunle, Lagos',
                    'role' => 'accountant',
                    'department_id' => 2,
                    'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum enim quo amet, praesentium blanditiis quas error recusandae iure, omnis nisi deserunt officiis repellat? Quia enim voluptas, soluta id non aliquam?',
                    'linkedin_url' => '',
                    'facebook_url' => '',
                    'twitter_url' => '',
                    'avatar' => 'default_avatar.jpg',
                    'avatar_url' => 'http://res.cloudinary.com/dvvvmbbei/image/upload/c_fit,h_200,w_200/gvatsjk6v0sr2jezzksw.png',
                ],

                [
                    'name' => 'Daniel Alabuja',
                    'email' => 'laboratorist@gmail.com',
                    'phone_number' => '0816343033',
                    'password' => bcrypt('password'),
                    'address' => '53 Joshua Streets Ajegunle, Lagos',
                    'role' => 'laboratorist',
                    'department_id' => 2,
                    'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum enim quo amet, praesentium blanditiis quas error recusandae iure, omnis nisi deserunt officiis repellat? Quia enim voluptas, soluta id non aliquam?',
                    'linkedin_url' => '',
                    'facebook_url' => '',
                    'twitter_url' => '',
                    'avatar' => 'default_avatar.jpg',
                    'avatar_url' => 'http://res.cloudinary.com/dvvvmbbei/image/upload/c_fit,h_200,w_200/gvatsjk6v0sr2jezzksw.png',
                ],

                [
                    'name' => 'Daniel Alabuja',
                    'email' => 'receptionist@gmail.com',
                    'phone_number' => '0816343032',
                    'password' => bcrypt('password'),
                    'address' => '53 Joshua Streets Ajegunle, Lagos',
                    'role' => 'receptionist',
                    'department_id' => 2,
                    'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum enim quo amet, praesentium blanditiis quas error recusandae iure, omnis nisi deserunt officiis repellat? Quia enim voluptas, soluta id non aliquam?',
                    'linkedin_url' => '',
                    'facebook_url' => '',
                    'twitter_url' => '',
                    'avatar' => 'default_avatar.jpg',
                    'avatar_url' => 'http://res.cloudinary.com/dvvvmbbei/image/upload/c_fit,h_200,w_200/gvatsjk6v0sr2jezzksw.png',
                ]
            )
        );

        DB::table('patients')->insert([
            'name' => 'Daniel Alabuja',
            'email' => 'daniel@gmail.com',
            'phone_number' => '0816343037',
            'password' => bcrypt('password'),
            'address' => '53 Joshua Streets Ajegunle, Lagos',
            'birth_date' => '2007-06-06',
            'blood_group' => 'O+',
            'genotype' => 'AA',
            'sex' => 'Male',
            'avatar' => 'default_avatar.jpg',
            'avatar_url' => 'http://res.cloudinary.com/dvvvmbbei/image/upload/c_fit,h_200,w_200/gvatsjk6v0sr2jezzksw.png',
        ]);
    }
}
