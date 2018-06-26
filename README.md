riechtjonasgeradekomisch
========================

Das Projekt *riechtjonasgeradekomisch* ist ein Spaßprojekt um seinem Freund (in meinem Falle Jonas) über Twitter
mitzuteilen, dass er komisch riecht.

In einer eigenen Verwaltung können Vorname und Twittername des komisch riechenden, sowie der Twittername des besten
Freundes (also Dir) eingerichtet werden.

## Installation ##

1. Lade alle Dateien und Ordner auf Deinen Webserver.
2. Installiere die benötigten Abhängigkeiten (`php composer.phar install`).
3. Öffne den Admin-Bereich (_domain.tld/admin_) und bearbeite die Standardwerte nach deinen Bedürfnissen. Bitte denke
daran, den Bereich mit einem [Verzeichniskennwort](https://httpd.apache.org/docs/current/programs/htpasswd.html) zu schützen!
4. Fertig! Besuche jetzt die Seite, klicke auf den Tweet-Button und teile Deinem Freund mit, dass er komisch riecht!

Das Paket `php-gd` wird für das Vorschaubild deiner Seite benötigt. Installiere es auf deinem Server oder frage deinen
Provider, ob er das Paket für dich einrichten kann.

## Geplante Funktionen ##

- [x] Englische und Deutsche Version in eine einzelne zusammenfassen
- [x] Volle multilinguale Unterstützung
- [ ] Setup für Erstellung der Konfigurationsdatei
