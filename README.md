# Faker Wrapper Docker Image

This is a Lumen PHP web application Docker image that implements the [RESO Feed Faker](https://github.com/sparkapi/feed-faker).

## Quick Start

```
$ docker run -d -p 8080:80 sparkapi/faker-wrapper
$ curl http://localhost:8080/property
 [{"ListingKey":"20170428170051261516000000","ListingId":"201704281...

# Hooray!
```

## List of Faker Endpoints

* Properties:   http://localhost:8080/property
* Members:      http://localhost:8080/member
* Offices:      http://localhost:8080/office
* Open House:   http://localhost:8080/openhouse
* History:      http://localhost:8080/history
* Media:        http://localhost:8080/media/jpeg
