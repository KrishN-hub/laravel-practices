# Laravel Practices 🧪

A personal collection of Laravel practice exercises, code snippets, and mini-projects.  
This repository is designed to help improve understanding of Laravel concepts through hands-on experience.



 📚 What You'll Find

- 🔁 Routing Practices
- 🧩 Controllers & Middleware
- 🗃️ Eloquent ORM & Relationships
- 🧪 Validation & Form Handling
- 🔐 Authentication & Authorization
- 🌐 API Routes & Resources
- 🎨 Blade Templates
- 🧰 Laravel Utilities & Helpers
- 🛠️ Mini Projects & Challenges

 🚀 Getting Started

1. Clone the repo:
   
   git clone https://github.com/your-username/laravel-practices.git

-------------------------------------28/7/2025----------

in Employee.php - models

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}

<---- needed models and migration, can direct acceess to database using tinker-------->
App\Models\Employee::create(["first_name"=>'seelan', "last_name"=>'jeya']);  


<---- DB:  command will works without models and migration ---- directly we can access database--------->
DB::table('employees')-> insert(["first_name"=>'mandothari', "last_name"=>'maanikkam', "created_at"=>'2025-0
7-28 05:06:58', "updated_at" => '2025-07-28 05:06:58']);

