## Project Setup

- cp .env.example .env
- Create database in your local phpmyadmin
- Update the DB configurations
- import the demo.sql file from the root of this project directory

## Folder specification

- Assets: consist of core JS, CSS and Images of the project
- config: Directory is responsible for all configurations related to DB and Response messages
- database: Directory is responsible for make the connection with DB
- model: This model directory consist model file for DB operations
- session: Session directory is handling the user state like user is login or not
- src: this folder consist of core logic of operations like login, registration and logout
