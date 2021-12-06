# cmchallengefs

---

_Notes (as communication is #1)_

-   DB would likely have user id (if continuing same pattern of having an account in order to apply for a shop). I didn't include this on purpose as authentication was specifically mentioned as not needed in the brief.
-   Tailwind was used just to get things up and running quickly, and get the frontend close to Figma mockup. Once the form was functioning properly I would create form components and style as is outlined in the Figma file.

---

### Install

In your terminal run:

-   `git clone https://github.com/jrmypttrsn/cmchallengefs.git`
-   `composer install`
-   `cp .env.example .env`
-   `php artisan key:generate`
-   create a local database named `cmchallengefs`
-   `php artisan migrate`
-   `npm install && npm run dev`

-   ###TODO:

-   refactor dropdown values to CONST in model?
