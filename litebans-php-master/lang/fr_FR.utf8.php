<?php

class fr_FR {
    public function __construct() {
        $this->version = 2;
        $array = array();
        $this->array = &$array;
		
        $array["index.welcome.main"] = "Bienvenue sur la liste des bans de {server}.";
        $array["index.welcome.sub"] = "C'est ici où toutes les sanctions sont listés.";

        $array["title.index"] = 'Home';
        $array["title.bans"] = 'Bans';
        $array["title.mutes"] = 'Mutes';
        $array["title.warnings"] = 'Alertes';
        $array["title.kicks"] = 'Kicks';
        $array["title.player-history"] = "Sanctions récentes pour {name}";
        $array["title.staff-history"] = "Sanctions récentes par {name}";


        $array["generic.ban"] = "Ban";
        $array["generic.mute"] = "Mute";
        $array["generic.warn"] = "Alerte";
        $array["generic.kick"] = "Kick";

        $array["generic.unban"] = "débannissement";
        $array["generic.unmute"] = "démute";

        $array["generic.banned"] = "Banni";
        $array["generic.muted"] = "Mute";
        $array["generic.warned"] = "Averti";
        $array["generic.kicked"] = "kick";

        $array["generic.unbanned"] = "Débanni";
        $array["generic.unmuted"] = "Démute";

        $array["generic.banned.by"] = $array["generic.banned"] . " Par";
        $array["generic.muted.by"] = $array["generic.muted"] . " Par";
        $array["generic.warned.by"] = $array["generic.warned"] . " Par";
        $array["generic.kicked.by"] = $array["generic.kicked"] . " Par";

        $array["generic.ipban"] = "IP " . $array["generic.ban"];
        $array["generic.ipmute"] = "IP " . $array["generic.mute"];

        $array["generic.permanent"] = "Permanent";
        $array["generic.permanent.ban"] = $array["generic.ban"] . ' ' . $array['generic.permanent'];
        $array["generic.permanent.mute"] = $array["generic.mute"] . ' ' . $array['generic.permanent'];

        $array["generic.type"] = "Type";
        $array["generic.active"] = "Actif";
        $array["generic.inactive"] = "Inactif";
        $array["generic.expired"] = "Expiré";
        $array["generic.expired.kick"] = "N/A";
        $array["generic.player-name"] = "Joueur";

        $array["page.expired.ban"] = '(' . $array["generic.unbanned"] . ')';
        $array["page.expired.ban-by"] = '(' . $array["generic.unbanned"] . ' par {name})';
        $array["page.expired.mute"] = '(' . $array["generic.unmuted"] . ')';
        $array["page.expired.mute-by"] = '(' . $array["generic.unmuted"] . ' par {name})';
        $array["page.expired.warning"] = '(' . $array["generic.expired"] . ')';

        $array["table.player"] = $array["generic.player-name"];
        $array["table.type"] = $array["generic.type"];
        $array["table.executor"] = "Modérateur";
        $array["table.reason"] = "Raison";
        $array["table.reason.unban"] = $array["table.reason"] . " du " . $array["generic.unban"];
        $array["table.reason.unmute"] = $array["table.reason"] . " du " . $array["generic.unmute"];
        $array["table.date"] = "Date";
        $array["table.expires"] = "Expiration";
        $array["table.received-warning"] = "Avertissement reçu";


        $array["table.server.name"] = "Serveur";
        $array["table.server.scope"] = "Serveur Scope";
        $array["table.server.origin"] = "Serveur d'origine";
        $array["table.server.global"] = "*";
        $array["table.pager.number"] = "Page";

        $array["action.check"] = "Check";
        $array["action.return"] = "Retour à {origin}";

        $array["error.missing-args"] = "Arguments manquants.";
        $array["error.name.unseen"] = "{name} n'a pas encore rejoins le serveur.";
        $array["error.name.invalid"] = "Nom invalide.";
        $array["history.error.uuid.no-result"] = "Aucune sanction trouvée.";
        $array["info.error.id.no-result"] = "Erreur: {type} non trouvé dans la base de données.";
    }
}
