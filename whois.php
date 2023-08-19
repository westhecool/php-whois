<?php
class whois
{
    var $servers;
    function __construct()
    {
        $this->servers = [
            "br.com" => [
                "host" => "whois.centralnic.net"
            ],
            "cn.com" => [
                "host" => "whois.centralnic.net"
            ],
            "de.com" => [
                "host" => "whois.centralnic.net"
            ],
            "eu.com" => [
                "host" => "whois.centralnic.net"
            ],
            "gb.com" => [
                "host" => "whois.centralnic.net"
            ],
            "gb.net" => [
                "host" => "whois.centralnic.net"
            ],
            "gr.com" => [
                "host" => "whois.centralnic.net"
            ],
            "hu.com" => [
                "host" => "whois.centralnic.net"
            ],
            "in.net" => [
                "host" => "whois.centralnic.net"
            ],
            "jpn.com" => [
                "host" => "whois.centralnic.net"
            ],
            "no.com" => [
                "host" => "whois.centralnic.net"
            ],
            "qc.com" => [
                "host" => "whois.centralnic.net"
            ],
            "ru.com" => [
                "host" => "whois.centralnic.net"
            ],
            "sa.com" => [
                "host" => "whois.centralnic.net"
            ],
            "se.com" => [
                "host" => "whois.centralnic.net"
            ],
            "se.net" => [
                "host" => "whois.centralnic.net"
            ],
            "uk.com" => [
                "host" => "whois.centralnic.net"
            ],
            "uk.net" => [
                "host" => "whois.centralnic.net"
            ],
            "us.com" => [
                "host" => "whois.centralnic.net"
            ],
            "uy.com" => [
                "host" => "whois.centralnic.net"
            ],
            "web.com" => [
                "host" => "whois.centralnic.net"
            ],
            "za.com" => [
                "host" => "whois.centralnic.net"
            ],
            "com" => [
                "host" => "whois.verisign-grs.com",
                "query" => "DOMAIN {query}\r\n"
            ],
            "za.net" => [
                "host" => "whois.za.net"
            ],
            "net" => [
                "host" => "whois.verisign-grs.com",
                "query" => "DOMAIN {query}\r\n"
            ],
            "eu.org" => [
                "host" => "whois.eu.org"
            ],
            "za.org" => [
                "host" => "whois.za.org"
            ],
            "org" => [
                "host" => "whois.pir.org"
            ],
            "edu" => [
                "host" => "whois.educause.edu"
            ],
            "gov" => [
                "host" => "whois.dotgov.gov"
            ],
            "int" => [
                "host" => "whois.iana.org"
            ],
            "e164.arpa" => [
                "host" => "whois.ripe.net"
            ],
            "arpa" => [
                "host" => "whois.iana.org"
            ],
            "aero" => [
                "host" => "whois.aero"
            ],
            "asia" => [
                "host" => "whois.nic.asia"
            ],
            "biz" => [
                "host" => "whois.biz"
            ],
            "cat" => [
                "host" => "whois.cat"
            ],
            "coop" => [
                "host" => "whois.nic.coop"
            ],
            "info" => [
                "host" => "whois.afilias.net"
            ],
            "jobs" => [
                "host" => "jobswhois.verisign-grs.com"
            ],
            "mobi" => [
                "host" => "whois.dotmobiregistry.net"
            ],
            "museum" => [
                "host" => "whois.museum"
            ],
            "name" => [
                "host" => "whois.nic.name"
            ],
            "post" => [
                "host" => "whois.dotpostregistry.net"
            ],
            "pro" => [
                "host" => "whois.afilias.net"
            ],
            "tel" => [
                "host" => "whois.nic.tel"
            ],
            "travel" => [
                "host" => "whois.nic.travel"
            ],
            "xxx" => [
                "host" => "whois.nic.xxx"
            ],
            "academy" => [
                "host" => "whois.nic.academy"
            ],
            "accountants" => [
                "host" => "whois.nic.accountants"
            ],
            "actor" => [
                "host" => "whois.nic.actor"
            ],
            "agency" => [
                "host" => "whois.nic.agency"
            ],
            "airforce" => [
                "host" => "whois.nic.airforce"
            ],
            "apartments" => [
                "host" => "whois.nic.apartments"
            ],
            "app" => [
                "host" => "whois.nic.google"
            ],
            "archi" => [
                "host" => "whois.nic.archi"
            ],
            "army" => [
                "host" => "whois.nic.army"
            ],
            "associates" => [
                "host" => "whois.nic.associates"
            ],
            "attorney" => [
                "host" => "whois.nic.attorney"
            ],
            "auction" => [
                "host" => "whois.nic.auction"
            ],
            "audio" => [
                "host" => "whois.nic.audio"
            ],
            "autos" => [
                "host" => "whois.nic.autos"
            ],
            "axa" => [
                "host" => "whois.nic.axa"
            ],
            "band" => [
                "host" => "whois.nic.band"
            ],
            "bar" => [
                "host" => "whois.nic.bar"
            ],
            "bargains" => [
                "host" => "whois.nic.bargains"
            ],
            "bayern" => [
                "host" => "whois.nic.bayern"
            ],
            "beer" => [
                "host" => "whois.nic.beer"
            ],
            "berlin" => [
                "host" => "whois.nic.berlin"
            ],
            "best" => [
                "host" => "whois.nic.best"
            ],
            "bid" => [
                "host" => "whois.nic.bid"
            ],
            "bike" => [
                "host" => "whois.nic.bike"
            ],
            "bingo" => [
                "host" => "whois.nic.bingo"
            ],
            "black" => [
                "host" => "whois.nic.black"
            ],
            "blackfriday" => [
                "host" => "whois.nic.blackfriday"
            ],
            "blog" => [
                "host" => "whois.nic.blog"
            ],
            "blue" => [
                "host" => "whois.nic.blue"
            ],
            "boutique" => [
                "host" => "whois.nic.boutique"
            ],
            "build" => [
                "host" => "whois.nic.build"
            ],
            "builders" => [
                "host" => "whois.nic.builders"
            ],
            "business" => [
                "host" => "whois.nic.business"
            ],
            "buzz" => [
                "host" => "whois.nic.buzz"
            ],
            "cab" => [
                "host" => "whois.nic.cab"
            ],
            "cafe" => [
                "host" => "whois.nic.cafe"
            ],
            "camera" => [
                "host" => "whois.nic.camera"
            ],
            "camp" => [
                "host" => "whois.nic.camp"
            ],
            "capital" => [
                "host" => "whois.nic.capital"
            ],
            "cards" => [
                "host" => "whois.nic.cards"
            ],
            "care" => [
                "host" => "whois.nic.care"
            ],
            "career" => [
                "host" => "whois.nic.career"
            ],
            "careers" => [
                "host" => "whois.nic.careers"
            ],
            "cash" => [
                "host" => "whois.nic.cash"
            ],
            "casino" => [
                "host" => "whois.nic.casino"
            ],
            "catering" => [
                "host" => "whois.nic.catering"
            ],
            "center" => [
                "host" => "whois.nic.center"
            ],
            "ceo" => [
                "host" => "whois.nic.ceo"
            ],
            "charity" => [
                "host" => "whois.nic.charity"
            ],
            "chat" => [
                "host" => "whois.nic.chat"
            ],
            "cheap" => [
                "host" => "whois.nic.cheap"
            ],
            "christmas" => [
                "host" => "whois.nic.christmas"
            ],
            "church" => [
                "host" => "whois.nic.church"
            ],
            "citic" => [
                "host" => "whois.nic.citic"
            ],
            "city" => [
                "host" => "whois.nic.city"
            ],
            "claims" => [
                "host" => "whois.nic.claims"
            ],
            "cleaning" => [
                "host" => "whois.nic.cleaning"
            ],
            "clinic" => [
                "host" => "whois.nic.clinic"
            ],
            "clothing" => [
                "host" => "whois.nic.clothing"
            ],
            "cloud" => [
                "host" => "whois.nic.cloud"
            ],
            "club" => [
                "host" => "whois.nic.club"
            ],
            "coach" => [
                "host" => "whois.nic.coach"
            ],
            "codes" => [
                "host" => "whois.nic.codes"
            ],
            "coffee" => [
                "host" => "whois.nic.coffee"
            ],
            "college" => [
                "host" => "whois.nic.college"
            ],
            "cologne" => [
                "host" => "whois.nic.cologne"
            ],
            "community" => [
                "host" => "whois.nic.community"
            ],
            "company" => [
                "host" => "whois.nic.company"
            ],
            "computer" => [
                "host" => "whois.nic.computer"
            ],
            "condos" => [
                "host" => "whois.nic.condos"
            ],
            "construction" => [
                "host" => "whois.nic.construction"
            ],
            "consulting" => [
                "host" => "whois.nic.consulting"
            ],
            "contractors" => [
                "host" => "whois.nic.contractors"
            ],
            "cooking" => [
                "host" => "whois.nic.cooking"
            ],
            "cool" => [
                "host" => "whois.nic.cool"
            ],
            "country" => [
                "host" => "whois.nic.country"
            ],
            "coupons" => [
                "host" => "whois.nic.coupons"
            ],
            "credit" => [
                "host" => "whois.nic.credit"
            ],
            "creditcard" => [
                "host" => "whois.nic.creditcard"
            ],
            "cruises" => [
                "host" => "whois.nic.cruises"
            ],
            "dance" => [
                "host" => "whois.nic.dance"
            ],
            "dating" => [
                "host" => "whois.nic.dating"
            ],
            "deals" => [
                "host" => "whois.nic.deals"
            ],
            "degree" => [
                "host" => "whois.nic.degree"
            ],
            "delivery" => [
                "host" => "whois.nic.delivery"
            ],
            "democrat" => [
                "host" => "whois.nic.democrat"
            ],
            "dental" => [
                "host" => "whois.nic.dental"
            ],
            "dentist" => [
                "host" => "whois.nic.dentist"
            ],
            "desi" => [
                "host" => "whois.nic.desi"
            ],
            "dev" => [
                "host" => "whois.nic.google"
            ],
            "diamonds" => [
                "host" => "whois.nic.diamonds"
            ],
            "digital" => [
                "host" => "whois.donuts.co"
            ],
            "direct" => [
                "host" => "whois.nic.direct"
            ],
            "directory" => [
                "host" => "whois.nic.directory"
            ],
            "discount" => [
                "host" => "whois.nic.discount"
            ],
            "dnp" => [
                "host" => "whois.nic.dnp"
            ],
            "doctor" => [
                "host" => "whois.nic.doctor"
            ],
            "dog" => [
                "host" => "whois.nic.dog"
            ],
            "domains" => [
                "host" => "whois.nic.domains"
            ],
            "education" => [
                "host" => "whois.nic.education"
            ],
            "email" => [
                "host" => "whois.nic.email"
            ],
            "energy" => [
                "host" => "whois.nic.energy"
            ],
            "engineer" => [
                "host" => "whois.nic.engineer"
            ],
            "engineering" => [
                "host" => "whois.nic.engineering"
            ],
            "enterprises" => [
                "host" => "whois.nic.enterprises"
            ],
            "equipment" => [
                "host" => "whois.nic.equipment"
            ],
            "estate" => [
                "host" => "whois.nic.estate"
            ],
            "eus" => [
                "host" => "whois.nic.eus"
            ],
            "events" => [
                "host" => "whois.nic.events"
            ],
            "exchange" => [
                "host" => "whois.nic.exchange"
            ],
            "expert" => [
                "host" => "whois.nic.expert"
            ],
            "exposed" => [
                "host" => "whois.nic.exposed"
            ],
            "express" => [
                "host" => "whois.nic.express"
            ],
            "fail" => [
                "host" => "whois.nic.fail"
            ],
            "family" => [
                "host" => "whois.nic.family"
            ],
            "fan" => [
                "host" => "whois.nic.fan"
            ],
            "farm" => [
                "host" => "whois.nic.farm"
            ],
            "feedback" => [
                "host" => "whois.nic.feedback"
            ],
            "finance" => [
                "host" => "whois.nic.finance"
            ],
            "financial" => [
                "host" => "whois.nic.financial"
            ],
            "fish" => [
                "host" => "whois.nic.fish"
            ],
            "fishing" => [
                "host" => "whois.nic.fishing"
            ],
            "fitness" => [
                "host" => "whois.nic.fitness"
            ],
            "flights" => [
                "host" => "whois.nic.flights"
            ],
            "florist" => [
                "host" => "whois.nic.florist"
            ],
            "foo" => [
                "host" => "whois.nic.foo"
            ],
            "football" => [
                "host" => "whois.nic.football"
            ],
            "forsale" => [
                "host" => "whois.nic.forsale"
            ],
            "foundation" => [
                "host" => "whois.nic.foundation"
            ],
            "frogans" => [
                "host" => "whois.nic.frogans"
            ],
            "fun" => [
                "host" => "whois.nic.fun"
            ],
            "fund" => [
                "host" => "whois.nic.fund"
            ],
            "furniture" => [
                "host" => "whois.nic.furniture"
            ],
            "futbol" => [
                "host" => "whois.nic.futbol"
            ],
            "fyi" => [
                "host" => "whois.nic.fyi"
            ],
            "gal" => [
                "host" => "whois.nic.gal"
            ],
            "gallery" => [
                "host" => "whois.nic.gallery"
            ],
            "games" => [
                "host" => "whois.nic.games"
            ],
            "gift" => [
                "host" => "whois.nic.gift"
            ],
            "gifts" => [
                "host" => "whois.nic.gifts"
            ],
            "gives" => [
                "host" => "whois.nic.gives"
            ],
            "glass" => [
                "host" => "whois.nic.glass"
            ],
            "global" => [
                "host" => "whois.nic.global"
            ],
            "globo" => [
                "host" => "whois.nic.globo"
            ],
            "gmbh" => [
                "host" => "whois.nic.gmbh"
            ],
            "gmo" => [
                "host" => "whois.nic.gmo"
            ],
            "gold" => [
                "host" => "whois.nic.gold"
            ],
            "golf" => [
                "host" => "whois.nic.golf"
            ],
            "gop" => [
                "host" => "whois.nic.gop"
            ],
            "graphics" => [
                "host" => "whois.nic.graphics"
            ],
            "gratis" => [
                "host" => "whois.nic.gratis"
            ],
            "gripe" => [
                "host" => "whois.nic.gripe"
            ],
            "group" => [
                "host" => "whois.nic.group"
            ],
            "guide" => [
                "host" => "whois.nic.guide"
            ],
            "guitars" => [
                "host" => "whois.nic.guitars"
            ],
            "guru" => [
                "host" => "whois.nic.guru"
            ],
            "haus" => [
                "host" => "whois.nic.haus"
            ],
            "healthcare" => [
                "host" => "whois.nic.healthcare"
            ],
            "hiphop" => [
                "host" => "whois.nic.hiphop"
            ],
            "hockey" => [
                "host" => "whois.nic.hockey"
            ],
            "holdings" => [
                "host" => "whois.nic.holdings"
            ],
            "holiday" => [
                "host" => "whois.nic.holiday"
            ],
            "homes" => [
                "host" => "whois.nic.homes"
            ],
            "horse" => [
                "host" => "whois.nic.horse"
            ],
            "hospital" => [
                "host" => "whois.nic.hospital"
            ],
            "host" => [
                "host" => "whois.nic.host"
            ],
            "house" => [
                "host" => "whois.nic.house"
            ],
            "immo" => [
                "host" => "whois.nic.immo"
            ],
            "immobilien" => [
                "host" => "whois.nic.immobilien"
            ],
            "industries" => [
                "host" => "whois.nic.industries"
            ],
            "ink" => [
                "host" => "whois.nic.ink"
            ],
            "institute" => [
                "host" => "whois.nic.institute"
            ],
            "insure" => [
                "host" => "whois.nic.insure"
            ],
            "international" => [
                "host" => "whois.nic.international"
            ],
            "investments" => [
                "host" => "whois.nic.investments"
            ],
            "irish" => [
                "host" => "whois.nic.irish"
            ],
            "jetzt" => [
                "host" => "whois.nic.jetzt"
            ],
            "jewelry" => [
                "host" => "whois.nic.jewelry"
            ],
            "juegos" => [
                "host" => "whois.nic.juegos"
            ],
            "kaufen" => [
                "host" => "whois.nic.kaufen"
            ],
            "kim" => [
                "host" => "whois.nic.kim"
            ],
            "kitchen" => [
                "host" => "whois.nic.kitchen"
            ],
            "kiwi" => [
                "host" => "whois.nic.kiwi"
            ],
            "koeln" => [
                "host" => "whois.nic.koeln"
            ],
            "kred" => [
                "host" => "whois.nic.kred"
            ],
            "land" => [
                "host" => "whois.nic.land"
            ],
            "lawyer" => [
                "host" => "whois.nic.lawyer"
            ],
            "lease" => [
                "host" => "whois.nic.lease"
            ],
            "legal" => [
                "host" => "whois.nic.legal"
            ],
            "life" => [
                "host" => "whois.nic.life"
            ],
            "lighting" => [
                "host" => "whois.nic.lighting"
            ],
            "limited" => [
                "host" => "whois.nic.limited"
            ],
            "limo" => [
                "host" => "whois.nic.limo"
            ],
            "link" => [
                "host" => "whois.nic.link"
            ],
            "live" => [
                "host" => "whois.nic.live"
            ],
            "loans" => [
                "host" => "whois.nic.loans"
            ],
            "london" => [
                "host" => "whois.nic.london"
            ],
            "love" => [
                "host" => "whois.nic.love"
            ],
            "ltd" => [
                "host" => "whois.nic.ltd"
            ],
            "luxe" => [
                "host" => "whois.nic.luxe"
            ],
            "luxury" => [
                "host" => "whois.nic.luxury"
            ],
            "maison" => [
                "host" => "whois.nic.maison"
            ],
            "management" => [
                "host" => "whois.nic.management"
            ],
            "mango" => [
                "host" => "whois.nic.mango"
            ],
            "market" => [
                "host" => "whois.nic.market"
            ],
            "marketing" => [
                "host" => "whois.nic.marketing"
            ],
            "mba" => [
                "host" => "whois.nic.mba"
            ],
            "media" => [
                "host" => "whois.nic.media"
            ],
            "meet" => [
                "host" => "whois.nic.meet"
            ],
            "memorial" => [
                "host" => "whois.nic.memorial"
            ],
            "menu" => [
                "host" => "whois.nic.menu"
            ],
            "miami" => [
                "host" => "whois.nic.miami"
            ],
            "moda" => [
                "host" => "whois.nic.moda"
            ],
            "moe" => [
                "host" => "whois.nic.moe"
            ],
            "monash" => [
                "host" => "whois.nic.monash"
            ],
            "money" => [
                "host" => "whois.nic.money"
            ],
            "mortgage" => [
                "host" => "whois.nic.mortgage"
            ],
            "moscow" => [
                "host" => "whois.nic.moscow"
            ],
            "motorcycles" => [
                "host" => "whois.nic.motorcycles"
            ],
            "movie" => [
                "host" => "whois.nic.movie"
            ],
            "nagoya" => [
                "host" => "whois.nic.nagoya"
            ],
            "navy" => [
                "host" => "whois.nic.navy"
            ],
            "network" => [
                "host" => "whois.nic.network"
            ],
            "neustar" => [
                "host" => "whois.nic.neustar"
            ],
            "news" => [
                "host" => "whois.nic.news"
            ],
            "ninja" => [
                "host" => "whois.nic.ninja"
            ],
            "nyc" => [
                "host" => "whois.nic.nyc"
            ],
            "okinawa" => [
                "host" => "whois.nic.okinawa"
            ],
            "one" => [
                "host" => "whois.nic.one"
            ],
            "onl" => [
                "host" => "whois.nic.onl"
            ],
            "online" => [
                "host" => "whois.centralnic.net"
            ],
            "paris" => [
                "host" => "whois.nic.paris"
            ],
            "partners" => [
                "host" => "whois.nic.partners"
            ],
            "parts" => [
                "host" => "whois.nic.parts"
            ],
            "photo" => [
                "host" => "whois.nic.photo"
            ],
            "photography" => [
                "host" => "whois.nic.photography"
            ],
            "photos" => [
                "host" => "whois.nic.photos"
            ],
            "pics" => [
                "host" => "whois.nic.pics"
            ],
            "pictures" => [
                "host" => "whois.nic.pictures"
            ],
            "pink" => [
                "host" => "whois.nic.pink"
            ],
            "pizza" => [
                "host" => "whois.nic.pizza"
            ],
            "place" => [
                "host" => "whois.nic.place"
            ],
            "plumbing" => [
                "host" => "whois.nic.plumbing"
            ],
            "plus" => [
                "host" => "whois.nic.plus"
            ],
            "press" => [
                "host" => "whois.nic.press"
            ],
            "productions" => [
                "host" => "whois.nic.productions"
            ],
            "properties" => [
                "host" => "whois.nic.properties"
            ],
            "pub" => [
                "host" => "whois.nic.pub"
            ],
            "qpon" => [
                "host" => "whois.nic.qpon"
            ],
            "quebec" => [
                "host" => "whois.nic.quebec"
            ],
            "recipes" => [
                "host" => "whois.nic.recipes"
            ],
            "red" => [
                "host" => "whois.nic.red"
            ],
            "rehab" => [
                "host" => "whois.nic.rehab"
            ],
            "reise" => [
                "host" => "whois.nic.reise"
            ],
            "reisen" => [
                "host" => "whois.nic.reisen"
            ],
            "ren" => [
                "host" => "whois.nic.ren"
            ],
            "rentals" => [
                "host" => "whois.nic.rentals"
            ],
            "repair" => [
                "host" => "whois.nic.repair"
            ],
            "report" => [
                "host" => "whois.nic.report"
            ],
            "republican" => [
                "host" => "whois.nic.republican"
            ],
            "rest" => [
                "host" => "whois.nic.rest"
            ],
            "restaurant" => [
                "host" => "whois.nic.restaurant"
            ],
            "reviews" => [
                "host" => "whois.nic.reviews"
            ],
            "rich" => [
                "host" => "whois.nic.rich"
            ],
            "rio" => [
                "host" => "whois.nic.rio"
            ],
            "rip" => [
                "host" => "whois.nic.rip"
            ],
            "rocks" => [
                "host" => "whois.nic.rocks"
            ],
            "rodeo" => [
                "host" => "whois.nic.rodeo"
            ],
            "ruhr" => [
                "host" => "whois.nic.ruhr"
            ],
            "run" => [
                "host" => "whois.nic.run"
            ],
            "ryukyu" => [
                "host" => "whois.nic.ryukyu"
            ],
            "saarland" => [
                "host" => "whois.nic.saarland"
            ],
            "sale" => [
                "host" => "whois.nic.sale"
            ],
            "salon" => [
                "host" => "whois.nic.salon"
            ],
            "sarl" => [
                "host" => "whois.nic.sarl"
            ],
            "school" => [
                "host" => "whois.nic.school"
            ],
            "schule" => [
                "host" => "whois.nic.schule"
            ],
            "services" => [
                "host" => "whois.nic.services"
            ],
            "sexy" => [
                "host" => "whois.nic.sexy"
            ],
            "shiksha" => [
                "host" => "whois.nic.shiksha"
            ],
            "shoes" => [
                "host" => "whois.nic.shoes"
            ],
            "shopping" => [
                "host" => "whois.nic.shopping"
            ],
            "show" => [
                "host" => "whois.nic.show"
            ],
            "singles" => [
                "host" => "whois.nic.singles"
            ],
            "site" => [
                "host" => "whois.nic.site"
            ],
            "soccer" => [
                "host" => "whois.nic.soccer"
            ],
            "social" => [
                "host" => "whois.nic.social"
            ],
            "software" => [
                "host" => "whois.nic.software"
            ],
            "sohu" => [
                "host" => "whois.nic.sohu"
            ],
            "solar" => [
                "host" => "whois.nic.solar"
            ],
            "solutions" => [
                "host" => "whois.nic.solutions"
            ],
            "soy" => [
                "host" => "whois.nic.soy"
            ],
            "space" => [
                "host" => "whois.nic.space"
            ],
            "sport" => [
                "host" => "whois.nic.sport"
            ],
            "store" => [
                "host" => "whois.nic.store"
            ],
            "studio" => [
                "host" => "whois.nic.studio"
            ],
            "style" => [
                "host" => "whois.nic.style"
            ],
            "supplies" => [
                "host" => "whois.nic.supplies"
            ],
            "supply" => [
                "host" => "whois.nic.supply"
            ],
            "support" => [
                "host" => "whois.nic.support"
            ],
            "surgery" => [
                "host" => "whois.nic.surgery"
            ],
            "systems" => [
                "host" => "whois.nic.systems"
            ],
            "tattoo" => [
                "host" => "whois.nic.tattoo"
            ],
            "tax" => [
                "host" => "whois.nic.tax"
            ],
            "taxi" => [
                "host" => "whois.nic.taxi"
            ],
            "team" => [
                "host" => "whois.nic.team"
            ],
            "tech" => [
                "host" => "whois.nic.tech"
            ],
            "technology" => [
                "host" => "whois.nic.technology"
            ],
            "tennis" => [
                "host" => "whois.nic.tennis"
            ],
            "theater" => [
                "host" => "whois.nic.theater"
            ],
            "tienda" => [
                "host" => "whois.nic.tienda"
            ],
            "tips" => [
                "host" => "whois.nic.tips"
            ],
            "tires" => [
                "host" => "whois.nic.tires"
            ],
            "today" => [
                "host" => "whois.nic.today"
            ],
            "tokyo" => [
                "host" => "whois.nic.tokyo"
            ],
            "tools" => [
                "host" => "whois.nic.tools"
            ],
            "top" => [
                "host" => "whois.nic.top"
            ],
            "tours" => [
                "host" => "whois.nic.tours"
            ],
            "town" => [
                "host" => "whois.nic.town"
            ],
            "toys" => [
                "host" => "whois.nic.toys"
            ],
            "trade" => [
                "host" => "whois.nic.trade"
            ],
            "training" => [
                "host" => "whois.nic.training"
            ],
            "university" => [
                "host" => "whois.nic.university"
            ],
            "uno" => [
                "host" => "whois.nic.uno"
            ],
            "vacations" => [
                "host" => "whois.nic.vacations"
            ],
            "vegas" => [
                "host" => "whois.nic.vegas"
            ],
            "ventures" => [
                "host" => "whois.nic.ventures"
            ],
            "versicherung" => [
                "host" => "whois.nic.versicherung"
            ],
            "vet" => [
                "host" => "whois.nic.vet"
            ],
            "viajes" => [
                "host" => "whois.nic.viajes"
            ],
            "video" => [
                "host" => "whois.nic.video"
            ],
            "villas" => [
                "host" => "whois.nic.villas"
            ],
            "vin" => [
                "host" => "whois.nic.vin"
            ],
            "vip" => [
                "host" => "whois.nic.vip"
            ],
            "vision" => [
                "host" => "whois.nic.vision"
            ],
            "vodka" => [
                "host" => "whois.nic.vodka"
            ],
            "vote" => [
                "host" => "whois.nic.vote"
            ],
            "voting" => [
                "host" => "whois.nic.voting"
            ],
            "voto" => [
                "host" => "whois.nic.voto"
            ],
            "voyage" => [
                "host" => "whois.nic.voyage"
            ],
            "wang" => [
                "host" => "whois.nic.wang"
            ],
            "watch" => [
                "host" => "whois.nic.watch"
            ],
            "webcam" => [
                "host" => "whois.nic.webcam"
            ],
            "website" => [
                "host" => "whois.nic.website"
            ],
            "wed" => [
                "host" => "whois.nic.wed"
            ],
            "wien" => [
                "host" => "whois.nic.wien"
            ],
            "wiki" => [
                "host" => "whois.nic.wiki"
            ],
            "wine" => [
                "host" => "whois.nic.wine"
            ],
            "works" => [
                "host" => "whois.nic.works"
            ],
            "world" => [
                "host" => "whois.nic.world"
            ],
            "wtc" => [
                "host" => "whois.nic.wtc"
            ],
            "wtf" => [
                "host" => "whois.nic.wtf"
            ],
            "xn--3bst00m" => [
                "host" => "whois.nic.xn--3bst00m"
            ],
            "xn--3ds443g" => [
                "host" => "whois.nic.xn--3ds443g"
            ],
            "xn--55qw42g" => [
                "host" => "whois.nic.xn--55qw42g"
            ],
            "xn--55qx5d" => [
                "host" => "whois.nic.xn--55qx5d"
            ],
            "xn--6frz82g" => [
                "host" => "whois.nic.xn--6frz82g"
            ],
            "xn--6qq986b3xl" => [
                "host" => "whois.nic.xn--6qq986b3xl"
            ],
            "xn--80adxhks" => [
                "host" => "whois.nic.xn--80adxhks"
            ],
            "xn--80asehdb" => [
                "host" => "whois.nic.xn--80asehdb"
            ],
            "xn--80aswg" => [
                "host" => "whois.nic.xn--80aswg"
            ],
            "xn--c1avg" => [
                "host" => "whois.nic.xn--c1avg"
            ],
            "xn--cg4bki" => [
                "host" => "whois.nic.xn--cg4bki"
            ],
            "xn--czrs0t" => [
                "host" => "whois.nic.xn--czrs0t"
            ],
            "xn--czr694b" => [
                "host" => "whois.nic.xn--czr694b"
            ],
            "xn--czru2d" => [
                "host" => "whois.nic.xn--czru2d"
            ],
            "xn--d1acj3b" => [
                "host" => "whois.nic.xn--d1acj3b"
            ],
            "xn--fiq228c5hs" => [
                "host" => "whois.nic.xn--fiq228c5hs"
            ],
            "xn--fiq64b" => [
                "host" => "whois.nic.xn--fiq64b"
            ],
            "xn--i1b6b1a6a2e" => [
                "host" => "whois.nic.xn--i1b6b1a6a2e"
            ],
            "xn--io0a7i" => [
                "host" => "whois.nic.xn--io0a7i"
            ],
            "xn--mgbab2bd" => [
                "host" => "whois.nic.xn--mgbab2bd"
            ],
            "xn--ngbc5azd" => [
                "host" => "whois.nic.xn--ngbc5azd"
            ],
            "xn--nqv7f" => [
                "host" => "whois.nic.xn--nqv7f"
            ],
            "xn--nqv7fs00ema" => [
                "host" => "whois.nic.xn--nqv7fs00ema"
            ],
            "xn--q9jyb4c" => [
                "host" => "whois.nic.xn--q9jyb4c"
            ],
            "xn--rhqv96g" => [
                "host" => "whois.nic.xn--rhqv96g"
            ],
            "xn--ses554g" => [
                "host" => "whois.nic.xn--ses554g"
            ],
            "xn--unup4y" => [
                "host" => "whois.nic.xn--unup4y"
            ],
            "xn--vhquv" => [
                "host" => "whois.nic.xn--vhquv"
            ],
            "xn--zfr164b" => [
                "host" => "whois.nic.xn--zfr164b"
            ],
            "xyz" => [
                "host" => "whois.nic.xyz"
            ],
            "yachts" => [
                "host" => "whois.nic.yachts"
            ],
            "yokohama" => [
                "host" => "whois.nic.yokohama"
            ],
            "zone" => [
                "host" => "whois.nic.zone"
            ],
            "ac" => [
                "host" => "whois.nic.ac"
            ],
            "ae" => [
                "host" => "whois.aeda.net.ae"
            ],
            "af" => [
                "host" => "whois.nic.af"
            ],
            "ag" => [
                "host" => "whois.nic.ag"
            ],
            "ai" => [
                "host" => "whois.nic.ai"
            ],
            "am" => [
                "host" => "whois.amnic.net"
            ],
            "as" => [
                "host" => "whois.nic.as"
            ],
            "priv.at" => [
                "host" => "whois.nic.priv.at"
            ],
            "at" => [
                "host" => "whois.nic.at"
            ],
            "au" => [
                "host" => "whois.auda.org.au"
            ],
            "aw" => [
                "host" => "whois.nic.aw"
            ],
            "ax" => [
                "host" => "whois.ax"
            ],
            "be" => [
                "host" => "whois.dns.be"
            ],
            "bg" => [
                "host" => "whois.register.bg"
            ],
            "bi" => [
                "host" => "whois1.nic.bi"
            ],
            "bj" => [
                "host" => "whois.nic.bj"
            ],
            "bm" => [
                "host" => "whois.afilias-srs.net"
            ],
            "bn" => [
                "host" => "whois.bn"
            ],
            "bo" => [
                "host" => "whois.nic.bo"
            ],
            "br" => [
                "host" => "whois.registro.br"
            ],
            "by" => [
                "host" => "whois.cctld.by"
            ],
            "bw" => [
                "host" => "whois.nic.net.bw"
            ],
            "bz" => [
                "host" => "whois.afilias-grs.info"
            ],
            "co.ca" => [
                "host" => "whois.co.ca"
            ],
            "ca" => [
                "host" => "whois.cira.ca"
            ],
            "cc" => [
                "host" => "ccwhois.verisign-grs.com"
            ],
            "cd" => [
                "host" => "whois.nic.cd"
            ],
            "cf" => [
                "host" => "whois.dot.cf"
            ],
            "ch" => [
                "host" => "whois.nic.ch"
            ],
            "ci" => [
                "host" => "whois.nic.ci"
            ],
            "cl" => [
                "host" => "whois.nic.cl"
            ],
            "cm" => [
                "host" => "whois.netcom.cm"
            ],
            "edu.cn" => [
                "host" => "whois.edu.cn"
            ],
            "cn" => [
                "host" => "whois.cnnic.cn"
            ],
            "uk.co" => [
                "host" => "whois.uk.co"
            ],
            "co" => [
                "host" => "whois.nic.co"
            ],
            "cr" => [
                "host" => "whois.nic.cr"
            ],
            "cx" => [
                "host" => "whois.nic.cx"
            ],
            "cz" => [
                "host" => "whois.nic.cz"
            ],
            "de" => [
                "host" => "whois.denic.de",
                "query" => "-T dn {query}\r\n"
            ],
            "dk" => [
                "host" => "whois.dk-hostmaster.dk",
                "query" => "--charset=utf-8 --show-handles {query}\r\n"
            ],
            "dm" => [
                "host" => "whois.nic.dm"
            ],
            "do" => [
                "host" => "whois.nic.do"
            ],
            "dz" => [
                "host" => "whois.nic.dz"
            ],
            "ec" => [
                "host" => "whois.nic.ec"
            ],
            "ee" => [
                "host" => "whois.tld.ee"
            ],
            "eu" => [
                "host" => "whois.eu"
            ],
            "fi" => [
                "host" => "whois.fi"
            ],
            "fj" => [
                "host" => "whois.usp.ac.fj"
            ],
            "fm" => [
                "host" => "whois.nic.fm"
            ],
            "fo" => [
                "host" => "whois.nic.fo"
            ],
            "fr" => [
                "host" => "whois.nic.fr"
            ],
            "ga" => [
                "host" => "whois.dot.ga"
            ],
            "gd" => [
                "host" => "whois.nic.gd"
            ],
            "ge" => [
                "host" => "whois.nic.ge"
            ],
            "gf" => [
                "host" => "whois.mediaserv.net"
            ],
            "gg" => [
                "host" => "whois.gg"
            ],
            "gh" => [
                "host" => "whois.nic.gh"
            ],
            "gi" => [
                "host" => "whois.afilias-grs.info"
            ],
            "gl" => [
                "host" => "whois.nic.gl"
            ],
            "gp" => [
                "host" => "whois.nic.gp"
            ],
            "gq" => [
                "host" => "whois.dominio.gq"
            ],
            "gs" => [
                "host" => "whois.nic.gs"
            ],
            "gy" => [
                "host" => "whois.registry.gy"
            ],
            "hk" => [
                "host" => "whois.hkirc.hk"
            ],
            "hm" => [
                "host" => "whois.registry.hm"
            ],
            "hn" => [
                "host" => "whois.nic.hn"
            ],
            "hr" => [
                "host" => "whois.dns.hr"
            ],
            "ht" => [
                "host" => "whois.nic.ht"
            ],
            "hu" => [
                "host" => "whois.nic.hu"
            ],
            "id" => [
                "host" => "whois.pandi.or.id"
            ],
            "ie" => [
                "host" => "whois.domainregistry.ie"
            ],
            "il" => [
                "host" => "whois.isoc.org.il"
            ],
            "im" => [
                "host" => "whois.nic.im"
            ],
            "in" => [
                "host" => "whois.registry.in"
            ],
            "io" => [
                "host" => "whois.nic.io"
            ],
            "iq" => [
                "host" => "whois.cmc.iq"
            ],
            "ir" => [
                "host" => "whois.nic.ir"
            ],
            "is" => [
                "host" => "whois.isnic.is"
            ],
            "it" => [
                "host" => "whois.nic.it"
            ],
            "je" => [
                "host" => "whois.je"
            ],
            "jp" => [
                "host" => "whois.jprs.jp",
                "query" => "{query}/e\r\n"
            ],
            "ke" => [
                "host" => "whois.kenic.or.ke"
            ],
            "kg" => [
                "host" => "whois.domain.kg"
            ],
            "ki" => [
                "host" => "whois.nic.ki"
            ],
            "kn" => [
                "host" => "whois.nic.kn"
            ],
            "kr" => [
                "host" => "whois.kr"
            ],
            "ky" => [
                "host" => "whois.kyregistry.ky"
            ],
            "kz" => [
                "host" => "whois.nic.kz"
            ],
            "la" => [
                "host" => "whois.nic.la"
            ],
            "lc" => [
                "host" => "whois.afilias-grs.info"
            ],
            "li" => [
                "host" => "whois.nic.li"
            ],
            "lk" => [
                "host" => "whois.nic.lk"
            ],
            "ls" => [
                "host" => "whois.nic.ls"
            ],
            "lt" => [
                "host" => "whois.domreg.lt"
            ],
            "lu" => [
                "host" => "whois.dns.lu"
            ],
            "lv" => [
                "host" => "whois.nic.lv"
            ],
            "ly" => [
                "host" => "whois.nic.ly"
            ],
            "ma" => [
                "host" => "whois.iam.net.ma"
            ],
            "md" => [
                "host" => "whois.nic.md"
            ],
            "me" => [
                "host" => "whois.nic.me"
            ],
            "mg" => [
                "host" => "whois.nic.mg"
            ],
            "mk" => [
                "host" => "whois.marnet.mk"
            ],
            "ml" => [
                "host" => "whois.dot.ml"
            ],
            "mn" => [
                "host" => "whois.nic.mn"
            ],
            "mq" => [
                "host" => "whois.mediaserv.net"
            ],
            "mr" => [
                "host" => "whois.nic.mr"
            ],
            "ms" => [
                "host" => "whois.nic.ms"
            ],
            "mu" => [
                "host" => "whois.nic.mu"
            ],
            "mw" => [
                "host" => "whois.nic.mw"
            ],
            "mx" => [
                "host" => "whois.mx"
            ],
            "my" => [
                "host" => "whois.domainregistry.my"
            ],
            "mz" => [
                "host" => "whois.nic.mz"
            ],
            "na" => [
                "host" => "whois.na-nic.com.na"
            ],
            "nc" => [
                "host" => "whois.nc"
            ],
            "nf" => [
                "host" => "whois.nic.nf"
            ],
            "ng" => [
                "host" => "whois.nic.net.ng"
            ],
            "nl" => [
                "host" => "whois.domain-registry.nl"
            ],
            "no" => [
                "host" => "whois.norid.no",
                "query" => "-c utf-8 {query}\r\n"
            ],
            "nu" => [
                "host" => "whois.iis.nu"
            ],
            "nz" => [
                "host" => "whois.srs.net.nz"
            ],
            "om" => [
                "host" => "whois.registry.om"
            ],
            "pe" => [
                "host" => "kero.yachay.pe"
            ],
            "pf" => [
                "host" => "whois.registry.pf"
            ],
            "co.pl" => [
                "host" => "whois.co.pl"
            ],
            "pl" => [
                "host" => "whois.dns.pl"
            ],
            "pm" => [
                "host" => "whois.nic.pm"
            ],
            "pr" => [
                "host" => "whois.nic.pr"
            ],
            "ps" => [
                "host" => "whois.pnina.ps"
            ],
            "pt" => [
                "host" => "whois.dns.pt"
            ],
            "pw" => [
                "host" => "whois.nic.pw"
            ],
            "qa" => [
                "host" => "whois.registry.qa"
            ],
            "re" => [
                "host" => "whois.nic.re"
            ],
            "ro" => [
                "host" => "whois.rotld.ro"
            ],
            "rs" => [
                "host" => "whois.rnids.rs"
            ],
            "edu.ru" => [
                "host" => "whois.informika.ru"
            ],
            "ru" => [
                "host" => "whois.tcinet.ru"
            ],
            "rw" => [
                "host" => "whois.ricta.org.rw"
            ],
            "sa" => [
                "host" => "whois.nic.net.sa"
            ],
            "sb" => [
                "host" => "whois.nic.sb"
            ],
            "sc" => [
                "host" => "whois.afilias-grs.info"
            ],
            "se" => [
                "host" => "whois.iis.se"
            ],
            "sg" => [
                "host" => "whois.sgnic.sg"
            ],
            "sh" => [
                "host" => "whois.nic.sh"
            ],
            "si" => [
                "host" => "whois.arnes.si"
            ],
            "sk" => [
                "host" => "whois.sk-nic.sk"
            ],
            "sl" => [
                "host" => "whois.nic.sl"
            ],
            "sm" => [
                "host" => "whois.nic.sm"
            ],
            "sn" => [
                "host" => "whois.nic.sn"
            ],
            "so" => [
                "host" => "whois.nic.so"
            ],
            "ss" => [
                "host" => "whois.nic.ss"
            ],
            "st" => [
                "host" => "whois.nic.st"
            ],
            "su" => [
                "host" => "whois.tcinet.ru"
            ],
            "sx" => [
                "host" => "whois.sx"
            ],
            "sy" => [
                "host" => "whois.tld.sy"
            ],
            "tc" => [
                "host" => "whois.nic.tc"
            ],
            "td" => [
                "host" => "whois.nic.td"
            ],
            "tf" => [
                "host" => "whois.nic.tf"
            ],
            "tg" => [
                "host" => "whois.nic.tg"
            ],
            "th" => [
                "host" => "whois.thnic.co.th"
            ],
            "tk" => [
                "host" => "whois.dot.tk"
            ],
            "tl" => [
                "host" => "whois.nic.tl"
            ],
            "tm" => [
                "host" => "whois.nic.tm"
            ],
            "tn" => [
                "host" => "whois.ati.tn"
            ],
            "to" => [
                "host" => "whois.tonic.to"
            ],
            "tr" => [
                "host" => "whois.nic.tr"
            ],
            "tv" => [
                "host" => "tvwhois.verisign-grs.com"
            ],
            "tw" => [
                "host" => "whois.twnic.net.tw"
            ],
            "tz" => [
                "host" => "whois.tznic.or.tz"
            ],
            "biz.ua" => [
                "host" => "whois.biz.ua"
            ],
            "co.ua" => [
                "host" => "whois.co.ua"
            ],
            "pp.ua" => [
                "host" => "whois.pp.ua"
            ],
            "ua" => [
                "host" => "whois.ua"
            ],
            "ug" => [
                "host" => "whois.co.ug"
            ],
            "ac.uk" => [
                "host" => "whois.ja.net"
            ],
            "gov.uk" => [
                "host" => "whois.ja.net"
            ],
            "uk" => [
                "host" => "whois.nic.uk"
            ],
            "fed.us" => [
                "host" => "whois.nic.gov"
            ],
            "us" => [
                "host" => "whois.nic.us"
            ],
            "uy" => [
                "host" => "whois.nic.org.uy"
            ],
            "uz" => [
                "host" => "whois.cctld.uz"
            ],
            "vc" => [
                "host" => "whois.afilias-grs.info"
            ],
            "ve" => [
                "host" => "whois.nic.ve"
            ],
            "vg" => [
                "host" => "whois.nic.vg"
            ],
            "vu" => [
                "host" => "vunic.vu"
            ],
            "wf" => [
                "host" => "whois.nic.wf"
            ],
            "ws" => [
                "host" => "whois.website.ws"
            ],
            "yt" => [
                "host" => "whois.nic.yt"
            ],
            "ac.za" => [
                "host" => "whois.ac.za"
            ],
            "alt.za" => [
                "host" => "whois.alt.za"
            ],
            "co.za" => [
                "host" => "whois.registry.net.za"
            ],
            "gov.za" => [
                "host" => "whois.gov.za"
            ],
            "net.za" => [
                "host" => "whois.net.za"
            ],
            "web.za" => [
                "host" => "whois.web.za"
            ],
            "zm" => [
                "host" => "whois.nic.zm"
            ],
            "xn--3e0b707e" => [
                "host" => "whois.kr"
            ],
            "xn--45brj9c" => [
                "host" => "whois.inregistry.net"
            ],
            "xn--80ao21a" => [
                "host" => "whois.nic.kz"
            ],
            "xn--90a3ac" => [
                "host" => "whois.rnids.rs"
            ],
            "xn--clchc0ea0b2g2a9gcd" => [
                "host" => "whois.sgnic.sg"
            ],
            "xn--fiqs8s" => [
                "host" => "cwhois.cnnic.cn"
            ],
            "xn--fiqz9s" => [
                "host" => "cwhois.cnnic.cn"
            ],
            "xn--fpcrj9c3d" => [
                "host" => "whois.inregistry.net"
            ],
            "xn--fzc2c9e2c" => [
                "host" => "whois.nic.lk"
            ],
            "xn--gecrj9c" => [
                "host" => "whois.inregistry.net"
            ],
            "xn--h2brj9c" => [
                "host" => "whois.inregistry.net"
            ],
            "xn--j1amh" => [
                "host" => "whois.dotukr.com"
            ],
            "xn--j6w193g" => [
                "host" => "whois.hkirc.hk"
            ],
            "xn--kprw13d" => [
                "host" => "whois.twnic.net.tw"
            ],
            "xn--kpry57d" => [
                "host" => "whois.twnic.net.tw"
            ],
            "xn--l1acc" => [
                "host" => "whois.nic.mn"
            ],
            "xn--lgbbat1ad8j" => [
                "host" => "whois.nic.dz"
            ],
            "xn--mgb9awbf" => [
                "host" => "whois.registry.om"
            ],
            "xn--mgba3a4f16a" => [
                "host" => "whois.nic.ir"
            ],
            "xn--mgbaam7a8h" => [
                "host" => "whois.aeda.net.ae"
            ],
            "xn--mgbbh1a71e" => [
                "host" => "whois.inregistry.net"
            ],
            "xn--mgberp4a5d4ar" => [
                "host" => "whois.nic.net.sa"
            ],
            "xn--mgbx4cd0ab" => [
                "host" => "whois.domainregistry.my"
            ],
            "xn--o3cw4h" => [
                "host" => "whois.thnic.co.th"
            ],
            "xn--ogbpf8fl" => [
                "host" => "whois.tld.sy"
            ],
            "xn--p1ai" => [
                "host" => "whois.tcinet.ru"
            ],
            "xn--s9brj9c" => [
                "host" => "whois.inregistry.net"
            ],
            "xn--wgbh1c" => [
                "host" => "whois.dotmasr.eg"
            ],
            "xn--wgbl6a" => [
                "host" => "whois.registry.qa"
            ],
            "xn--xkc2al3hye2a" => [
                "host" => "whois.nic.lk"
            ],
            "xn--xkc2dl3a5ee0h" => [
                "host" => "whois.inregistry.net"
            ],
            "xn--yfro4i67o" => [
                "host" => "whois.sgnic.sg"
            ],
            "xn--ygbi2ammx" => [
                "host" => "whois.pnina.ps"
            ],
            "_default" => [
                "host" => "whois.iana.org"
            ],
            "_ip" => [
                "host" => "whois.arin.net",
                "query" => "n + {query}\r\n"
            ],
            "_asn" => [
                "host" => "whois.radb.net",
                "query" => "-i origin {query}\r\n"
            ]
        ];
    }
    function addServer($domain, $host, $query = null) {
        $this->servers[$domain] = ["host" => $host];
        if ($query) {
            $this->servers[$domain]["query"] = $query;
        }
    }
    function isIP($ip) {
        return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) || filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6);
    }
    function isASN($asn) {
        return strpos($asn, "AS") === 0 && strpos($asn, ".") === false; // Make sure it's not just a domain that starts with "AS"
    }
    function lookup($query, $maxreferrals = 5, $timeout = 30, $_serveroverride = false, $_referrals = 0)
    {
        $request = "$query\r\n";
        $server = null;
        $type = 1; // domain
        if ($this->isIP($query)) $type = 2; // ip
        if ($this->isASN($query)) $type = 3; // asn
        if ($_serveroverride) {
            $server = $_serveroverride;
            if ($this->servers[$server]["query"]) {
                $request = preg_replace("/{query}/", $query, $this->servers[$server]["query"]);
            }
        } else {
        if ($type == 1) {
            $lastquery = $query;
            while ($server == null) { 
                if ($this->servers[$query]) {
                    $server = $this->servers[$query]["host"];
                    if ($this->servers[$query]["query"]) {
                        $request = preg_replace("/{query}/", $lastquery, $this->servers[$query]["query"]);
                    }
                    $query = $lastquery;
                    break;
                }
                $lastquery = $query;
                $query = preg_split("/\./", $query);
                unset($query[0]);
                if (count($query) < 1) {
                    throw new Exception("No server can be found!", 3);
                }
                $query = implode(".", $query);
            }   
        } else if ($type == 2) {
            $server = $this->servers["_ip"]["host"];
            if ($this->servers["_ip"]["query"]) {
                $request = preg_replace("/{query}/", $query, $this->servers["_ip"]["query"]);
            }
        } else if ($type == 3) {
            $server = $this->servers["_asn"]["host"];
            if ($this->servers["_asn"]["query"]) {
                $request = preg_replace("/{query}/", $query, $this->servers["_asn"]["query"]);
            }
        }
    }
        $fp = fsockopen($server, 43, $errno, $errstr, $timeout);
        if (!$fp) {
            throw new Exception("Error Processing Request: " . $errstr, 1);
        } else {
            fwrite($fp, $request);
            $data = "";
            while (!feof($fp)) {
                $data .= fgets($fp, 1024);
            }
            fclose($fp);
            $match = preg_match("/(ReferralServer|Registrar Whois|Whois Server|WHOIS Server|Registrar WHOIS Server|refer):[^\S\n]*((?:r?whois|https?):\/\/)?([0-9A-Za-z\.\-_]*)/", preg_replace("/\r/", "", $data), $matches);
            if ($match && $matches[3] && $matches[3] != $server) {
                if ($maxreferrals >= $_referrals) {
                    $_referrals++;
                    return $this->lookup($query, $maxreferrals, $timeout, $matches[3], $_referrals);
                } else {
                    throw new Exception("Max Referrals Exceeded", 2);
                }
            } else {
                return ["data" => $data, "referrals" => $_referrals, "server" => $server, "query" => $query];
            }
        }
    }
}
?>