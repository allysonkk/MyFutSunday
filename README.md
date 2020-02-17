# MyFutSunday

Playing football with your friends on weekends is always hard to find the best balanced team.
The App offers a simple CRUD where you can register the players, setup the skills and the logic will make the teams for a fair match.

Started at 16/02/2020.

## Technologies/Versions
- PHP 7.2
- Laravel 6.2.
- MySQL 5.7.
- VueJS 2.5.17.

This project demonstrate the use of Laravel for backend, working as a REST API and VueJS for the frontend consuming the API.
Security is implemented with OAuth2 provided by Laravel Passaport.

## Currently (MVP)

So far you can:
- Login with Laravel Auth.
- Register Players and Skills.
- Sort Teams.

## Future implementation

### backend
- Finish passaport implementation.
- Protect routes.
- Issue a token for user authentication.
- Use token to make calls to the API.
- Validation.
- Use Events to dispatch emails.

### frontend
- Create skill set schema.
- Create rank based on skill set.
- Update skills according to the game so the player can go up and down on the rank. 
- Make the team based on the rank.
- Save previous sorted team so it doesn't become repetitive.
- Each player can register on the platform.
- Choose players with a checkbox to make the teams.
- Schedule events, dispatch emails so the player can be checked-in and be ready to be selected to make a team.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).