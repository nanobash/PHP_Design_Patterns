### PHP Design Patterns

### Active-Record Pattern
The active-record pattern is a simple data-access method that maps a database table or view into an object.

    Advantages:
        Centralize access
        CRUD operations on objects, that give possibility of validations, permissions checking, or even triggering events

    Drawbacks:
        Objects are tightly connected to the database schema

#### Factory Pattern
Allows to create object without needing direct access to implementation logic

    Advantages:
        Stantardising interfaces (e.g communication with different databases)

    Drawbacks:
        Refactoring may be difficult
        Subclasses may have a many boilerplate classes
