<p align="center"><img src="https://gist.githack.com/kabirdeula/b02cbc3372a642d880a90343ea0dfae0/raw/2a958b32d423ff7b136954c305435d895ba2bebe/unilink.svg" width="300" alt="UniLink Logo"></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
<img src="https://static.codeac.io/badges/2-674061186.svg" alt="Issues">
</p>

## About UniLink

UniLink is an online platform that connects university students, teachers, and administrators in a single platform. It provides various features to enhance communication, collaboration, and information sharing within the university community.

## Features

- User Management: UniLink offers user management functionality where administrators can create, edit, and delete user accounts for students, teachers, and administrators.
- Courses Management: Administrators can manage the courses offered by the university, including creating new courses, editing course details, and deleting courses.
- Programs Management: UniLink allows administrators to manage academic programs offered by the university. They can create new programs, update program details, and delete programs.
- Attendance Management: Teachers can take attendance for their classes, and administrators can manage the attendance records. This includes recording attendance, generating reports, and analyzing attendance data.
- Marks Management: Teachers can enter marks for students, and administrators can manage the marks records. This includes recording marks, calculating averages, and generating reports.
- PDF Generation: UniLink provides functionality to generate PDF reports for attendance records, marks records, and other important information.
- Bayesian Classifier: The system includes a Bayesian classifier that predicts student performance based on attendance and marks data.

## Screenshots

![Index](./public/images/documentaion/index.png)

## Technologies Used

- Laravel: Backend framework used for developing the UniLink application.
- MySQL: Database management system used for storing data related to users, courses, programs, attendance, and marks.
- Bootstrap 5: Frontend framework used for designing responsive and user-friendly interfaces.

## Installation

1. Clone the UniLink repository to your local machine.
2. Configure the database connection settings in the `.env` file.
3. Run `composer install` to install the project dependencies.
4. Run `php artisan migrate` to create the necessary database tables.
5. Run `php artisan serve` to start the development server.
6. Open your browser and access UniLink at `http://localhost:8000`.

## Contributing

Contributions are welcome! If you'd like to contribute to UniLink, please follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Make the necessary changes and commit your code.
4. Push your changes to your forked repository.
5. Submit a pull request to the main UniLink repository.

## License

UniLink is open-source software licensed under the [MIT license](LICENSE).

