# Plan van Aanpak - IT-systeem voor SpaceX's intercontinentale raketreizen

## Inhoudsopgave
1. Inleiding
2. Doel
3. Doelgroep
4. User stories
5. Planning
6. Wireframe
7. Technische specificaties

## 1. Inleiding
Dit plan van aanpak beschrijft de ontwikkeling van een IT-systeem voor SpaceX's intercontinentale raketreizen. Het doel is om een uitgebreid systeem te bouwen dat het plannen van raketvluchten, ticketboeking en integratie van vergunningen voor ruimtevluchten mogelijk maakt. Hiermee willen we SpaceX voorzien van een gebruiksvriendelijke en luxe ervaring voor hun klanten.

## 2. Doel
Het doel van dit IT-systeem is om intercontinentale raketreizen toegankelijk te maken voor een breed publiek. Door een naadloze gebruikerservaring te bieden, willen we de manier waarop mensen reizen revolutioneren. Het systeem lost het probleem op van het efficiënt boeken van raketreizen en het beheren van de logistiek.

## 3. Doelgroep
De potentiele gebruikers van dit systeem zijn klanten die geïnteresseerd zijn in intercontinentale raketreizen. Ze worden gemotiveerd door het vooruitzicht van snelle en unieke reismogelijkheden en verkiezen dit systeem boven dat van de concurrentie vanwege de luxe ervaring en de betrouwbare service die SpaceX biedt.

## 4. User stories
Als een nieuwe klant
Om de snelheid van het leveren van content aan klanten te verbeteren
Wil ik toetsenbordsnelkoppelingen hebben voor het manipuleren van content

## 5. Planning
We beginnen met het identificeren van de benodigde features en stellen de prioriteit vast op basis van de behoeften van de gebruikers. Vervolgens maken we een planning waarbij we verantwoordelijkheden toewijzen aan teamleden en dagelijkse taken bepalen.

| Feature      | Gerelateerde user stories     | Verantwoordelijke(n) | Af op   | Issue op GitLab         |
|--------------|------------------------------|----------------------|----------|-------------------------|
| Feature X    | -                          | Teamlid A            | Dag X    | [Link naar issue](...)   |
| Feature Y    | -                          | Teamlid B            | Dag X    | [Link naar issue](...)   |
| Feature Z    | -                          | Teamlid C            | Dag X    | [Link naar issue](...)   |

## 6. Wireframe
Het wireframe is een visuele schets van het user interface (UI) en de user experience (UX) van het systeem. Het geeft een niet-technisch persoon een idee van wat er gebouwd zal worden.

[Voorbeeld wireframe](link-naar-wireframe)

## 7. Technische specificaties
Voor dit IT-systeem zullen we gebruikmaken van de volgende technische specificaties:
- Programmeertalen: JavaScript, HTML, CSS & PHP
- Frameworks: Bootstrap

## 8. Notities
### Front-end
- Calendar Interface
### Back-end
- available flights
- repair flights
- Facilities (repair en voor users)
### Maintenance window
- pasenger limit on flight
- Actions
- timeslot markeren als available door crew
- Maintenance window aanpassen door crew
- plan depature and arrivaval door users
- repair flight kunnen aangeven
- passenger capacity aanpssen door crew
### Restrictie
- Depature kan alleen na arrival
- repair flights kunnen alleen van en naar repair Facilities
- geen users op repair flight
- Gedurende onderhoud geen evenement voor racket
- Gedurende onderhoud geen evenement voor launchpad
- Users kunnen geen flight booken als limit van flight berijkt is
### Data structuur

1. Vluchten
    - id
    - van facility -> verwijzing
    - naar facility -> verwijzing
    - vertrek datum+tijd
    - aankomst datum+tijd
    - racket -> verwijzing
    - repair/passagier vlucht
    - aantal passagiers
2. Raketten
    - id
    - Verbruik / co2 uitstoot
    - max-pasagiers
3. Maintenance configuratie
    - tijdsduur
    - TODO: waaraan is het gekoppeld?
4. Facility / launchpad
    - repair / passagiers
## 9. Verdeling van taken
### Front-End

> Bartek Ostrowski

> Calvin van Lambaart

> Tristan Nijman


> Fabian van Unen

> Daryl Färber

<hr>

### Back-End
> Fabian van Unen

> Daryl Färber

<hr>

### Data Structuur

> Fabian van Unen

> Daryl Färber
