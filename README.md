# SpaceX Deep Dive P4 2023

Dit is het team project van **Team Ronnie** van de laatste deep dive van het schooljaar 2022-2023.

## Ons Werk

Wij moeten werken aan de SpaceX business case, **SpaceX Intercontinental Rocket Flight Booking System**, waar je uit vier challenges kan kiezen om te maken met je team. Wij hebben gekozen uit Flight Scheduling System. Natuurlijk mag je alle challenges maken, maar dat lijkt een beetje overbodig. Wat wij moeten doen en hoe wij het hebben geïnterpreteerd staat in onze plan van aanpak; `project_plan.md`

De andere challenges waren:

- The Customer Journey
  > "The customer journey begins with the discovery of SpaceX's intercontinental rocket flights, followed by a deep dive into the offerings and features of the service. Prospective customers will be able to explore **destination cities**, learn about **Starport locations**, and compare the **CO2 footprint ([CO2 Regulations for Commercial Space Travel - Ensuring Sustainable Exploration](https://www.notion.so/CO2-Regulations-for-Commercial-Space-Travel-Ensuring-Sustainable-Exploration-c7033955fabc4fcdb760f6b347d5dc2c))** of SpaceX's rocket flights to other forms of travel. <br><br> The booking process will guide customers through selecting their flight, entering their **permit ID** (if required), choosing their preferred **transit option**, and reviewing the **contract** that outlines potential risks, liability, and health concerns. Throughout this journey, the user interface should maintain a high-end, luxurious look and feel." [Van de Business Case](https://bitacademy.notion.site/Project-overview-8596f6b124504057abc2a1d47649e601#b7e54a77e2ec43e0a76d70c2c32a53aa).
- SpaceX Operations and Logistics
  > "SpaceX's operations involve a complex network of Starports, transit options, and scheduling systems. The booking platform will need to accommodate this complexity, while also providing customers with a user-friendly experience. <br><br>Starports will be located in strategic areas near major cities, ensuring easy access for passengers. A separate system will be used to handle the Starport Transit Hubs, which will provide transportation to and from the Starports. The system will be used to allow the customer to book their transit option, which will be included in the ticket price." [Van de Business Case](https://bitacademy.notion.site/Project-overview-8596f6b124504057abc2a1d47649e601#b7e54a77e2ec43e0a76d70c2c32a53aa).
- Research Challenge: Identifying the First Five Starports
  > "The potential for growth in this market is immense. As the first company to offer intercontinental rocket flights, SpaceX has the opportunity to shape the future of travel. By providing a seamless booking experience and exceptional customer service, they can attract a loyal customer base." <br><br> Identifying the Best Starport Locations <br> "As part of this project, your data team will be tasked with analyzing a list of 20 potential Starport locations to determine the best cities for launching the first five SpaceX Starports. This research challenge will require an in-depth understanding of the transit statistics and luxury travel data for each city. Your team should consider factors such as market size, profitability, accessibility, and the potential for future growth." <br> <br> Narrowing Down the List <br>"To get started, examine the provided list of potential Starport locations, complete with essential data such as Starport site coordinates, destination cities, estimated Starport costs, and available transit options. Analyze this data to identify the most promising cities for the initial launch of SpaceX's intercontinental rocket flights. <br>The user would like a data dashboard that displays an argument for the chosen starport locations compared to other potential locations. This dashboard should be useful in selecting starport locations in the future. The user would also like the financial data to be automatically updated every fiscal year, though this is not strictly necessary." [Van de Business Case](https://bitacademy.notion.site/Project-overview-8596f6b124504057abc2a1d47649e601#b7e54a77e2ec43e0a76d70c2c32a53aa).

## Ontstaan van project.

Ons project ontstaat het meest uit beide Front- en Back-end. Bij onze challenge hebben we geen data analysatie nodig. We gebruiken PHP, SQL, HTML, CSS, CSS Frameworks(Bootstrap v5.3), JavaScript en JSON.

## Disclaimer

De meeste foto's zijn gegenereerd door AI. De foto van ons repository is mayilong0, de Chineese döppelganger van Elon Musk.

## Project installatie 
1. Installeer [xampp](https://www.apachefriends.org/download.html) op je windows machine.
2. Navigeer door het installatiemenu en zorg dat aan het einde het control paneel wordt opgestart.
3. Start apache & mysql op het control paneel.
4. Ga in de terminal naar C:/xampp/htdocs/
5. Download [git](https://git-scm.com/).
6. In de terminal gebruik de volgende command `git clone git@bitlab.bit-academy.nl:eabe2084-29d7-11ed-81f7-4213e7ee7fac/f79cf519-6649-4074-b2eb-cdd1f0c98d3e/spacex-deep-dive-p4-2023.git`
7. Navigeer naar [localhost/phpmyadmin](http://localhost/phpmyadmin).
8. Creeër een database genaamd `deep_dive_p4`
9. Importeer de meegegeven database in 'app/classes/deep_dive_p4.sql'.