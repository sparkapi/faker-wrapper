<?php

namespace App\Helpers;


use DI\Container;
use FeedFaker\Classes\HistoryFaker;
use FeedFaker\Classes\MediaFaker;
use FeedFaker\Classes\MemberFaker;
use FeedFaker\Classes\OfficeFaker;
use FeedFaker\Classes\OpenHouseFaker;
use FeedFaker\Classes\PropertyFaker;
use FeedFaker\Models\GenericResource;
use PhpParser\Node\Stmt\Property;

class ModelHelper
{
    public static function getOffice()
    {
        $faker = new OfficeFaker(app(Container::class));
        return $faker->generate();
    }

    public static function getMember()
    {
        $faker = new MemberFaker(app(Container::class));
        return $faker->generate(self::getOffice());
    }

    public static function getProperty()
    {
        $faker = new PropertyFaker(app(Container::class));
        return $faker->generate(self::getMember(), self::getMember());
    }

    public static function getOpenHouse()
    {
        $faker = new OpenHouseFaker(app(Container::class));
        return $faker->generate(self::getProperty());
    }

    public static function getHistory()
    {
        $faker = new HistoryFaker(app(Container::class));
        $generic = self::getGenericProperty();

        return $faker->generate($generic);
    }

    public static function getPropertyMedia()
    {
        $faker = new MediaFaker(app(Container::class));
        $property = self::getProperty();

        return $faker->generatePropertyImages($property);
    }

    private static function getGenericProperty()
    {
        $generic = new GenericResource();
        $resource = self::getProperty();

        /** @var Property $resource */
        $generic->setResourceRecordId($resource->getListingId());
        $generic->setResourceRecordKey($resource->getListingKey());
        $generic->setOriginatingSystemName($resource->getOriginatingSystemName());
        $generic->setOriginatingSystemKey($resource->getOriginatingSystemKey());
        $generic->setAgentMlsId($resource->getListAgentMlsId());
        $generic->setAgentMlsKey($resource->getListAgentKey());

        return $generic;
    }
}