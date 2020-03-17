# Elevator-php
The app represents elevator work. This is kind of state pattern realization.
The app has four states(classes): open,close,move,stop. Each one implements corresponding interface.
The Elevator class set up the right state using type hinting
For example if the state equals 'Move', call open method will cause an error 
