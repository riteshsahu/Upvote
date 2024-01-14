<p align="center">
     <img width="70" src="https://i.imgur.com/a3KjiYS.png" alt="Upvote Logo">
</p>

***Upvote is the single, best place for everyone to ask and answer any question.***

![Screenshot](https://i.imgur.com/mIxoBkb.png)


<details>
  <summary>More Screenshots</summary>
    <img src="https://i.imgur.com/mP7K8go.png" alt="Screenshot 1"/>
    <img src="https://i.imgur.com/7UCSU8w.png" alt="Screenshot 2"/>
    <img src="https://i.imgur.com/YUTJGj3.png" alt="Screenshot 3"/>
    <img src="https://i.imgur.com/eDehDb4.png" alt="Screenshot 4"/>
    <img src="https://i.imgur.com/YKRKAHY.png" alt="Screenshot 5"/>
    <img src="https://i.imgur.com/3ujvvLH.png" alt="Screenshot 6"/>
    <img src="https://i.imgur.com/YCWse6h.png" alt="Screenshot 7"/>
    <img src="https://i.imgur.com/0PYTkDc.png" alt="Screenshot 8"/>
    <img src="https://i.imgur.com/mIxoBkb.png" alt="Screenshot 9"/>
    <img src="https://i.imgur.com/3tt6eV2.png" alt="Screenshot 10"/>
</details>


## Environment Setup

 1. Make sure correct node version is installed as per `package.json` and php version as per `composer.json`
 2. Install dependencies `npm i` and `composer install`
 3. Make sure `.env` file is present with the required keys, look at `.env.example` for reference
 4. Generate app key - `php artisan key:generate`
 5. Link storage to public folder - `php artisan storage:link`
 6. Run Development Server -  `npm run watch` and `php artisan serve`
 7. Run database migrations - `php artisan migrate`
 8. Seed database - `php artisan db:seed`
 9. Should be running at `localhost:8000`


**Telescope**

 1. Publish telescope assets - `php artisan telescope:publish`
 2. Access telescope at - `http://localhost:8000/telescope`


Note: `main` is stable branch

MySQL - `8.0`
Redis - `7.0`
Composer `2.5.5`

## Test Credentials
Email - `ritesh@example.com`
Password - `password`

Email - `elon@example.com`
Password - `password`