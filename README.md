PSR Log
=======

This repository holds all interfaces/classes/traits related to
[PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md).

Note that this is not a logger of its own. It is merely an interface that
describes a logger. See the specification for more details.

Uitwerking
-----

Voor deze opdracht heb ik gekozen om de interface te gebruiken van de gegeven GitHub. Ik heb een eigen logger gemaakt,
MartinaLogger, die een HAS A relatie heeft met de interface. De MartinaLogger heeft dus een property van de interface. 
Daarnaast heb ik voor de FileLogger en DatabaseLogger aparte classes gemaakt, die de interface implementeren. Dat zijn 
FileStrategy en DbStrategy.
