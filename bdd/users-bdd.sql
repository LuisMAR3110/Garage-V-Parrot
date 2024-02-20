CREATE USER 'adminGarage'@'127.0.0.1' IDENTIFIED BY '20pKwL85g!7s';

CREATE USER 'employeGarage'@'127.0.0.1' IDENTIFIED BY '21pnIY300!xq';


GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.avis TO 'employeGarage'@'127.0.0.1';

GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.messagesClients TO 'employeGarage'@'127.0.0.1';

GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.voitures TO 'employeGarage'@'127.0.0.1';

GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.avis TO 'adminGarage'@'127.0.0.1';

GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.messagesClients TO 'adminGarage'@'127.0.0.1';

GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.voitures TO 'adminGarage'@'127.0.0.1';

GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.utilisateurs TO 'adminGarage'@'127.0.0.1';

GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.services TO 'adminGarage'@'127.0.0.1';

GRANT SELECT, INSERT, UPDATE, DELETE ON GarageVincentParrot.horaires TO 'adminGarage'@'127.0.0.1';

