
[![Build Status](https://travis-ci.org/socrata/soda-php.svg?branch=chrismetcalf%2Ftravis)](https://travis-ci.org/socrata/soda-php)

# Socrata - Basic PHP Library
This library provides a simple wrapper for accessing some of the features of the Socrata Open Data API from PHP. Currently it supports HTTP GET, POST, and PUT operations.

The library is very simple. To access the Socrata API, you first instantiate a "Socrata" object, passing in the domain of the data site you wish to access. The library will also accept the full root path including the protocol (ex: `http://data.medicare.gov`). Then you can use its included methods to make simple API calls.

Please check out the Socrata team, and their organization. They are doing a great job at helping facilitate the data, and most of the Socrata class is their good work.

My changes to the Socrata class allow a user to change Socrata's query limit. 

## My Changes

Currently, Socrata limits its returned data to 1000 entires. This is reasonable for smaller "on demand" data. However, for large pulls of data the limitter can be annoying to work with. A user must manually edit the URL if they want to work with Socrata's limitter. However I found this to be clumsy to work with because of how PHP handles Strings, Variables and URLs. So instead of editting the Socrata class everytime a user needs to work with the limitter, I have created methods and changes to the constructor to support a user changing the limitter and offset without having to edit the URL by hand.

The Socrata constructer has been updated to handle a new limit function. Users may pass a value into the constructor to change the limit from the default setting of 1000.

Get and set methods have been included to help users change the limit and offsets. Remember: the limitter and offset must be changed before the get method is called.

Included is a index file that demonstrates how the limitter works. It gets data from cause of death data from the US CDC. If a user wants to download this data onto a local server, then they will need to work with the limitter to get all 15 thousand entries in one call. 


## License

Apache License, Version 2.0. Please see [License File](LICENSE) for more information.
