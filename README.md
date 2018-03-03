
[![Build Status](https://travis-ci.org/socrata/soda-php.svg?branch=chrismetcalf%2Ftravis)](https://travis-ci.org/socrata/soda-php)

# Socrata - Basic PHP Library
This library provides a simple wrapper for accessing some of the features of the Socrata Open Data API from PHP. Currently it supports HTTP GET, POST, and PUT operations.

The library is very simple. To access the Socrata API, you first instantiate a "Socrata" object, passing in the domain of the data site you wish to access. The library will also accept the full root path including the protocol (ex: `http://data.medicare.gov`). Then you can use its included methods to make simple API calls.

My changes to the Socrata class allow a user to change Socrata's query limit. 

## Changes

Currently, Socrata limits its returned data to 1000 entires. This is reasonable for smaller "on demand" data. However, for large pulls of data the limitter can be annoying to work with. A user may manually work with the limitter by changing the URL, but this can be clumsy. I have created methods and changes to the constructor to support a user changing the limitter and offset without having to edit the URL by hand.

The Socrata constructer has been updated to handle a new limit function. Users may pass a value into the constructor to change the limit from the default setting of 1000.

Get and set methods have been included to help users change the limit and offsets. Remember to change your limitter and offset before you call the get method.

Included is a index file that demonstrates how the limitter works. It gets data from cause of death data from the US CDC. If a user wants to download this data onto a local server, then they will need to work with the limitter to get all 15 thousand entries. 


## License

Apache License, Version 2.0. Please see [License File](LICENSE) for more information.
