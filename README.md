# Carcassonne Game-session observer
---
### An observer for DinnerBuffet's [Carcassonne (Tabletop Simulator Mod)](https://github.com/DinnerBuffet/TTSCarcassonne) game-sessions.
##### Based on [Lumen by Laravel](https://lumen.laravel.com/)
###### Please see [Server Requirements](https://lumen.laravel.com/docs/6.x#installation) for running Lumen on your server.

### Installation
1. Please follow the original [Installguide from Lumen](https://lumen.laravel.com/docs/6.x#installation) to install your local Lumen instance.
2. Configure your .\\.env file
    1. **!!!IMPORTANT!!!** Please make sure, that you change the APP_KEY to a random 32 characters long string.
    2. Insert your personal "Pusher" data from your pusher app.
    2. If you don't wanna host the observer local, change the APP_URL to the future URL of your observer.
    3. Change APP_TIMEZONE to your local timezone. [Timezone format](https://www.php.net/manual/en/timezones.php)
    4. **!!!IMPORTANT!!!** Change the OBSERVER_KEY to a random string (min. 8 chars recommended). This will be your "password" to connect your game-session with your observer.