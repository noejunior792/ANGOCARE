# AngoCare 👶🏿

**AngoCare** is a platform for donating goods to community centers in Angola. The goal of the project is to facilitate the connection between donors and community centers that need donations of various types of goods.

![AngoCare Screenshot](./screenshot/screenshot.png)

## Features ⚙️

- User registration and authentication
- Community center listing
- Community center registration
- Donation registration
- Donation history
- Notifications for donors and community centers

## Technologies Used 🔥

- PHP
- Laravel
- MySQL
- Bootstrap
- JavaScript

## Installation 🔝🦾

To run the project locally, follow the steps below:

1. Clone the repository:
```bash
git clone https://github.com/noejunior792/Angocare.git
cd angocare
```

2. Install Laravel dependencies:
```bash
composer install
```

3. Create the `.env` file:
```bash
cp .env.example .env
```

4. Generate the application key:
```bash
php artisan key:generate
```

5. Configure the `.env` file with your database information.

6. Run migrations and seeders:
```bash
php artisan migrate --seed
```

7. Start the local server:
```bash
php artisan serve
```

8. Access `http://localhost:8000` in your web browser.

## Contribution 🤼‍♂️

If you want to contribute to the project, follow the steps below:

1. Fork the project.

2. Create a new branch:
```bash
git checkout -b my-feature
```
3. Make the desired changes.
4. Commit your changes:
```bash
git commit -m 'My new feature'
```
5. Push to the branch:
```bash
git push origin my-feature
```
6. Open a Pull Request.

## License 🎓

This project is licensed under the Apache License. See the [LICENSE](LICENSE) file for more details.

## Contact 📩

For more information, contact us at: [noedombaxe@gmail.com](mailto:your-email@example.com)