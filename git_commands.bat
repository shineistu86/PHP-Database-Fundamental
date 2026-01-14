#!/bin/bash

# Navigate to project directory
cd "C:/laragon/www/2307016-PHP"

# Initialize Git repository
git init

# Configure Git user
git config --local user.name "shineistu86"
git config --local user.email "shineistu86@gmail.com"

# Add all files
git add .

# Create initial commit
git commit -m "Initial commit: PHP Database Fundamental project with CRUD operations"

# Add remote origin
git remote add origin https://github.com/shineistu86/PHP-Database-Fundamental.git

# Set main branch and push
git branch -M main
git push -u origin main