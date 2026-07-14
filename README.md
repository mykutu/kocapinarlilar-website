# Kocapınarlılar Konfeksiyon — Web Sitesi

[kocapinarlilar.com](https://kocapinarlilar.com) adresinde yayınlanan, 1972'den beri Balıkesir'de faaliyet gösteren Kocapınarlılar Konfeksiyon'un (gelinlik, damatlık, nişanlık, abiye, aksesuar) kurumsal tanıtım sitesinin kaynak kodu.

Canlı önizleme (GitHub Pages): https://mykutu.github.io/kocapinarlilar-website/

## İçindekiler

- [Proje Hakkında](#proje-hakkında)
- [Klasör Yapısı](#klasör-yapısı)
- [Kullanılan Teknolojiler](#kullanılan-teknolojiler)
- [Gereksinimler](#gereksinimler)
- [Yerelde Çalıştırma](#yerelde-çalıştırma)
- [Yayına Alma (Deployment)](#yayına-alma-deployment)
- [Güvenlik Önlemleri](#güvenlik-önlemleri)
- [Tarayıcı ve Mobil Uyumluluk](#tarayıcı-ve-mobil-uyumluluk)
- [Bilinen Kısıtlar](#bilinen-kısıtlar)

## Proje Hakkında

Tek sayfalık (one-page), statik bir tanıtım sitesidir. Sunucu tarafında iş mantığı veya veritabanı bulunmaz; tüm içerik `index.html` içinde sabittir ve JavaScript ile bölümler arası geçiş (Anasayfa / Hakkında / Koleksiyon / İletişim) sağlanır.

`v1/` klasörü, sitenin 2017 öncesine ait eski bir sürümünü içerir; artık ana site tarafından kullanılmaz ama geriye dönük uyumluluk için sunucuda tutulmaktadır.

## Klasör Yapısı

```
.
├── index.html              # Ana (güncel) sayfa
├── .htaccess                # Apache/LiteSpeed sunucu yapılandırması
├── assets/
│   ├── css/magister.css     # Site özel stilleri
│   ├── js/
│   │   ├── magister.js              # Bölüm geçişi (menü tıklama, fade in/out)
│   │   └── modernizr.custom.72241.js
│   ├── images/               # Arka plan ve logo görselleri
│   └── screenshots/           # Ürün kategorisi görselleri
└── v1/                       # Eski (2017 öncesi) site sürümü — artık bağlı değil
    └── index.php
```

## Kullanılan Teknolojiler

- **HTML5 / CSS3** — yarı saydam, tema değiştirilebilir (`theme-invert`) tasarım
- **Bootstrap 3.0.3** — grid sistemi ve temel bileşenler (CDN üzerinden, SRI ile doğrulanmış)
- **jQuery 1.10.2** — menü geçişleri ve animasyonlar (CDN üzerinden, SRI ile doğrulanmış)
- **Font Awesome 6** — iletişim bölümündeki sosyal medya logoları (X, Facebook, Instagram, Pinterest, Tumblr)
- **Google Fonts** ("Wire One") — başlık yazı tipi
- **Google Analytics** — ziyaretçi istatistikleri

Derleme adımı (build step) yoktur; dosyalar doğrudan tarayıcıda çalışacak şekilde yazılmıştır.

## Gereksinimler

Bu proje statik bir sitedir, bu yüzden çalıştırmak için özel bir çalışma zamanına (Node.js, PHP sürüm vb.) ihtiyaç yoktur. Yayınlamak için gereken tek şey:

- **Herhangi bir HTTP(S) sunucusu** (Apache, LiteSpeed, Nginx, GitHub Pages, Netlify vb.)
- **İnternet erişimi** — sayfa Bootstrap/jQuery/Font Awesome/Google Fonts gibi harici CDN kaynaklarını çevrimiçi olarak yükler; tamamen çevrimdışı kullanılamaz
- `.htaccess` kurallarının (HTTPS yönlendirmesi, güvenlik başlıkları, dizin listeleme engeli) çalışması için sunucuda **Apache `mod_rewrite` ve `mod_headers` modüllerinin** etkin olması gerekir (mevcut cPanel/LiteSpeed barındırmada bu modüller zaten etkindir)
- `v1/index.php` dosyasının çalışması için sunucuda **PHP desteği** bulunmalıdır (dosya `.php` uzantılı olmasına rağmen içinde sunucu taraflı kod yoktur, sadece statik HTML/JS içerir)

## Yerelde Çalıştırma

Herhangi bir statik dosya sunucusu yeterlidir, örneğin:

```bash
python3 -m http.server 8000
# veya
npx serve .
```

Ardından tarayıcıda `http://localhost:8000` adresini açın.

## Yayına Alma (Deployment)

Site şu an FTP/FTPS ile `kocapinarlilar.com` barındırmasına (lihkab.net üzerinde) manuel olarak yükleniyor. Güncel dosyalar bu depodan sunucuya kopyalanarak yayınlanır; otomatik bir CI/CD işlem hattı bulunmamaktadır.

GitHub Pages üzerinden (`main` dalı) otomatik olarak yayınlanan bir önizleme adresi de mevcuttur, ancak bu yalnızca kontrol amaçlıdır — canlı site değildir.

## Güvenlik Önlemleri

- Tüm harici CDN kaynakları (Bootstrap, jQuery, Font Awesome) **Subresource Integrity (SRI)** ile doğrulanır; bir CDN ele geçirilse bile değiştirilmiş kod tarayıcı tarafından reddedilir
- Tüm dış kaynak yüklemeleri `https://` üzerinden yapılır (mixed-content engellemesi yok)
- `.htaccess` üzerinden `http://` → `https://` yönlendirmesi zorunlu kılınır
- Güvenlik başlıkları: `X-Content-Type-Options`, `X-Frame-Options`, `Referrer-Policy`, `Strict-Transport-Security`
- Sunucuda dizin listeleme (`Options -Indexes`) kapalıdır
- Kod tabanında sabit kodlanmış kimlik bilgisi/gizli anahtar bulunmamaktadır

## Tarayıcı ve Mobil Uyumluluk

- Mobil görünümde hamburger (üç çizgili) menü butonu kullanılır
- Başlıklar ve düzen küçük ekranlarda taşma yapmayacak şekilde uyarlanmıştır (`@media (max-width: 767px)`)
- `viewport` meta etiketi ile mobil ölçekleme desteklenir

## Bilinen Kısıtlar

- `v1/` klasörü artık kullanılmayan eski bir sürümdür; yalnızca eski bağlantıların kırılmaması için sunucuda tutulmaktadır
- Site şu anda **public** bir GitHub reposudur (GitHub Pages önizlemesinin ücretsiz planda çalışabilmesi için); kaynak kodda gizli/hassas bilgi bulunmadığı teyit edilmiştir
