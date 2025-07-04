#!/bin/bash
cd ~/bank
source venv/bin/activate
gunicorn --bind 0.0.0.0:8080 bankproject.wsgi:application
