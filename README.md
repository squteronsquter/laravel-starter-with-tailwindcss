# Starter setup for Laravel with Tailwind CSS

#### Create a new laravel application as you would usually do

```
laravel new tailwindcss-laravel
cd tailwindcss-laravel
```

#### Check if deafault installation is working

#### Install laravel default dependencies

```
npm install
npm run dev
php artisan serve
http://localhost:8000
```

#### Install additional dependencies

```
npm install tailwindcss laravel-mix-tailwind --save-dev
```

#### Edit webpack.mix.js

```
const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
mix.js('resources/js/app.js', 'public/js')
.sass('resources/sass/app.scss', 'public/css')
.options({
processCssUrls: false,
postCss: [tailwindcss('./tailwind.config.js')]
});
```

#### Edit /resources/sass/app.scss

```
// Import tailwindcss with pastcss preprocessing
@import '~tailwindcss/base';
@import '~tailwindcss/components';
@import '~tailwindcss/utilities';
```

#### Edit /resources/views/welcome.blade.php

```
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel with Tailwind CSS</title>
<link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="bg-gray-900 text-white">
        <div id="app" class="container mx-auto p-4">
            <custom-component></custom-component>
            <h1 class="text-6xl">Welcome to Laravel with Tailwind</h1>
            <p class="italic text-3xl">Tailwind CSS is pretty awesome!</p>
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl">This text is responsvie. Check it out for various screens.</p>
            <example-component></example-component>
        </div>

        <script src="/js/app.js"></script>
    </body>

</html>
```

#### Add new vue component in /resources/js/components/

```
touch /resources/js/components/CustomComponent.vue
```

#### Inside this file

```
<template>
  <div class="container">
    <div class="custom-heading bg-white text-black p-8 rounded" v-text="name"></div>
  </div>
</template>
<script>
export default {
  data() {
    return { name: "Custom Component Header" };
  }
};
</script>
<style type="text/css" scoped>
.custom-heading {
  font-size: 3em;
}
</style>
```

#### Require this file in: /resources/js/app.js

```
Vue.component(
    'custom-component',
    require('./components/CustomComponent.vue').default
);
```

#### Remove requirments for bootstrap in the same file as above

```
/* require('./bootstrap'); */
```

##### Add CSRF in welcome.blade.php or in your template blade file to get rid of console warning error about csrf-token

#### Create tailwind.config.js file in the root

```
touch tailwind.config.js
```

#### That is it! Run any commands you wish (package.json)

```
npm install
npm run dev
npm run watch
php artisan serve
npm run prod
```

#### To reduce the size of Tailwind CSS output file in production use PurgeCSS

#### Add PurgeCSS by installing laravel-mix-purgecss as dependency

```
npm install laravel-mix-purgecss
```

#### Include it in the webpack.mix.js file like that

```
const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')]
    })
    .purgeCss();
```

#### Run production build and check the size of the generated app.css file. Should be a lot smaller than the usual ca. 325 kb

```
npm run prod
```

#### Files included are samples you can use to replace or copy into your original files as per instructions above

**_Happy coding_**
