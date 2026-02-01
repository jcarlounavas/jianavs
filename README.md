# Confession Wall

An anonymous confession web application built with Laravel. Share confessions with others or send them directly to a specific user—all without revealing your identity.

## Features

- **Anonymous Confessions** – Submit confessions without logging in
- **User Accounts** – Register and receive confessions at your personal link
- **Direct Confessions** – Send confessions to a specific user by username
- **Personal Dashboard** – View all confessions sent to you in one place
- **Shareable Links** – Copy and share your confession link with others
- **Loading Feedback** – Spinners and overlays for form submissions, navigation, and page loads

## Tech Stack

- **Backend:** Laravel (PHP 8.2)
- **Frontend:** Bootstrap 5, Font Awesome, Custom CSS
- **Database:** MySQL / PostgreSQL

## Requirements

- PHP 8.2+
- Composer
- MySQL or PostgreSQL
- Node.js & npm (optional, for assets)


## Usage

| Route | Description |
|-------|-------------|
| `/home` | Main page – submit anonymous confessions |
| `/confess/{username}` | Submit confession to a specific user |
| `/logging-page` | Log in to your account |
| `/register` | Create a new account |
| `/dashboard` | View your received confessions (requires login) |

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
