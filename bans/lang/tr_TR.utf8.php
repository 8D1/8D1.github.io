<?php

class tr_TR {
    public function __construct() {
        $this->version = 2;
        $array = array();
        $this->array = &$array;

        $array["index.welcome.main"] = "{server} sunucusunun ceza listesine hoş geldin!";
        $array["index.welcome.sub"] = "Burası, sunucu içinde yapılan tüm cezalandırılmaların bulunduğu yer.";

        $array["title.index"] = 'Ana Sayfa';
        $array["title.bans"] = 'Yasaklamalar';
        $array["title.mutes"] = 'Susturmalar';
        $array["title.warnings"] = 'Uyarılar';
        $array["title.kicks"] = 'Atmalar';
        $array["title.player-history"] = "{name} adlı oyuncunun son cezalandırılmaları";
        $array["title.staff-history"] = "{name} tarafından gerçekleştirilen son cezalandırılmalar";


        $array["generic.ban"] = "Yasaklama";
        $array["generic.mute"] = "Susturma";
        $array["generic.warn"] = "Uyarı";
        $array["generic.kick"] = "Atma";

        $array["generic.unban"] = "Yasağı Kaldırma";
        $array["generic.unmute"] = "Susturulmayı Kaldırma";

        $array["generic.banned"] = "Yasaklanmış";
        $array["generic.muted"] = "Susturulmuş";
        $array["generic.warned"] = "Uyarılmış";
        $array["generic.kicked"] = "Atılmış";

        $array["generic.unbanned"] = "Yasağı Açılmış";
        $array["generic.unmuted"] = "Susturulması Açılmış";

        $array["generic.banned.by"] = $array["generic.banned"] . " şunun tarafından:";
        $array["generic.muted.by"] = $array["generic.muted"] . " şunun tarafından:";
        $array["generic.warned.by"] = $array["generic.warned"] . " şunun tarafından:";
        $array["generic.kicked.by"] = $array["generic.kicked"] . " şunun tarafından:";

        $array["generic.ipban"] = "IP'den " . $array["generic.ban"];
        $array["generic.ipmute"] = "IP'den " . $array["generic.mute"];

        $array["generic.permanent"] = "Kalıcı";
        $array["generic.permanent.ban"] = $array['generic.permanent'] . ' ' . $array["generic.ban"];
        $array["generic.permanent.mute"] = $array['generic.permanent'] . ' ' . $array["generic.mute"];

        $array["generic.type"] = "Tip";
        $array["generic.active"] = "Aktif";
        $array["generic.inactive"] = "Deaktif";
        $array["generic.expired"] = "Süresi Dolmuş";
        $array["generic.expired.kick"] = "N/A";
        $array["generic.player-name"] = "Oyuncu";

        $array["page.expired.ban"] = '(' . $array["generic.unbanned"] . ')';
        $array["page.expired.ban-by"] = '(' . $array["generic.unbanned"] . ' şunun tarafından: {name})';
        $array["page.expired.mute"] = '(' . $array["generic.unmuted"] . ')';
        $array["page.expired.mute-by"] = '(' . $array["generic.unmuted"] . ' şunun tarafından: {name})';
        $array["page.expired.warning"] = '(' . $array["generic.expired"] . ')';

        $array["table.player"] = $array["generic.player-name"];
        $array["table.type"] = $array["generic.type"];
        $array["table.executor"] = "Moderatör";
        $array["table.reason"] = "Sebep";
        $array["table.reason.unban"] = $array["generic.unban"] . " " . $array["table.reason"];
        $array["table.reason.unmute"] = $array["generic.unmute"] . " " . $array["table.reason"];
        $array["table.date"] = "Tarih";
        $array["table.expires"] = "Şu tarihte bitecek:";
        $array["table.received-warning"] = "Alınmış Uyarı";


        $array["table.server.name"] = "Sunucu";
        $array["table.server.scope"] = "Kapsanılan Sunucu"; //Still working on it.
        $array["table.server.origin"] = "Kaynak Sunucu";
        $array["table.server.global"] = "*";
        $array["table.pager.number"] = "Sayfa";

        $array["action.check"] = "Kontrol Et";
        $array["action.return"] = "{origin}'e/a geri dön"; //Still working on it.

        $array["error.missing-args"] = "Yetersiz argüman..";
        $array["error.name.unseen"] = "{name} daha önce bu sunucuya hiç girmemiş..";
        $array["error.name.invalid"] = "Geçersiz isim.";
        $array["history.error.uuid.no-result"] = "Hiç bir cezalandırma bulunamadı.";
        $array["info.error.id.no-result"] = "Hata: {type} veri tabanımızda bulunamadı.";
    }
}
