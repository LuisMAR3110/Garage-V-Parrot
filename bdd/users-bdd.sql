CREATE USER 'adminGarage'@'localhost' IDENTIFIED BY '20pKwL85g!7s';

CREATE USER 'employeGarage'@'localhost' IDENTIFIED BY '21pnIY300!xq';


GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.avis TO 'employeGarage'@'localhost';

GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.messagesClients TO 'employeGarage'@'localhost';

GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.voitures TO 'employeGarage'@'localhost';

GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.avis TO 'adminGarage'@'localhost';

GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.messagesClients TO 'adminGarage'@'localhost';

GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.voitures TO 'adminGarage'@'localhost';

GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.utilisateurs TO 'adminGarage'@'localhost';

GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.services TO 'adminGarage'@'localhost';

GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.horaires TO 'adminGarage'@'localhost';

