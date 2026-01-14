# 🚀 BaraSuite - Magyar ERP + CRM Rendszer

**BaraSuite** egy komplett üzleti menedzsment rendszer magyar kis- és középvállalkozások számára, amely integrálja a CRM (ügyfélkezelés) és ERP (készlet, számlázás, beszerzés) funkciókat egyetlen modern platformon.

## 🎯 Fő Jellemzők

- **🇭🇺 100% Magyar** - Teljes magyar nyelvi támogatás
- **🛒 Unas Webshop Integráció** - Közvetlen szinkronizáció Unas webshopokkal
- **📊 ERP Modulok** - Készlet, raktár, számlázás, beszerzés
- **👥 CRM Rendszer** - Lead-ek, üzletek, sales pipeline
- **⚡ Modern UI** - FilamentPHP alapú admin felület
- **🔓 MIT Licensz** - Teljes kereskedelmi szabadság

## 💼 Célpiac

- Webshop tulajdonosok (főleg Unas platform)
- Kiskereskedelmi vállalkozások
- Nagykereskedők
- Szolgáltató cégek

## 🏗️ Tech Stack

- **Backend**: Laravel 11 (PHP 8.2+)
- **Admin UI**: FilamentPHP 4.x
- **Database**: MySQL 8.0+ / PostgreSQL 14+
- **Cache**: Redis (opcionális)
- **Deployment**: Docker + Docker Compose
- **API**: RESTful

## 📦 Modulok

### ✅ Alapmodulok (AureusERP alapból)

- **Contacts** - Ügyfelek, szállítók, kapcsolattartók kezelése
- **Inventory** - Termékek, készlet, vonalkód
- **Warehouse** - Raktárkezelés, mozgások, leltár
- **Invoicing** - Számlák, árajánlatok, befizetések
- **Purchase** - Beszerzési megrendelések
- **HR** - Munkavállalók, pozíciók, toborzás
- **Projects** - Projekt menedzsment
- **Blog** - Tartalom kezelés

### 🔧 Fejlesztés alatt

- **Leads** - Lead capture, scoring, nurturing
- **Deals** - Ajánlatok, üzletkötés, pipeline
- **Sales Pipeline** - Kanban board, stages, forecasting
- **Email Integration** - Gmail/Outlook sync
- **Unas Sync** - Webshop integráció (rendelések, ügyfelek, termékek, készlet)

### 📅 Tervezett

- **Billingo/Számlázz.hu** - Magyar számlázó integrációk
- **Shoprenter/Shopify** - További webshop platformok
- **Advanced Reporting** - BI dashboard
- **Mobile App** - React Native / Flutter

## 🚀 Telepítés

### Követelmények

- PHP 8.2 vagy újabb
- Laravel 11.x
- FilamentPHP 4.x
- MySQL 8.0+ vagy PostgreSQL 14+
- Composer (legújabb verzió)
- Node.js & NPM (legújabb stabil verzió)
- Apache/Nginx szerver

### Docker telepítés (Ajánlott)

```bash
# Repository klónozása
git clone https://github.com/dj-bara/BaraERP.git barasuite
cd barasuite

# .env konfiguráció
cp .env.example .env
nano .env  # Szerkeszd: APP_NAME, DB_* értékek

# Docker indítása
docker-compose up -d

# Laravel setup
docker exec -it barasuite_app composer install
docker exec -it barasuite_app php artisan key:generate
docker exec -it barasuite_app php artisan migrate
docker exec -it barasuite_app php artisan db:seed

# Böngésző
# http://localhost:8000/admin
```

### Hagyományos telepítés

```bash
# Repository klónozása
git clone https://github.com/dj-bara/BaraERP.git barasuite
cd barasuite

# Függőségek telepítése
composer install
npm install

# .env konfiguráció
cp .env.example .env
php artisan key:generate
nano .env  # Szerkeszd az adatbázis beállításokat

# Adatbázis migrációk
php artisan migrate
php artisan db:seed

# Asset build
npm run build

# Szerver indítás
php artisan serve

# Böngésző
# http://localhost:8000/admin
```

## 🔑 Alapértelmezett bejelentkezés

```
Email: admin@barasuite.test
Jelszó: password
```

**⚠️ FONTOS:** Éles környezetben azonnal változtasd meg!

## 📚 Dokumentáció

- [Felhasználói kézikönyv](docs/user-guide.md) - Hamarosan
- [Fejlesztői dokumentáció](docs/developer-guide.md) - Hamarosan
- [API dokumentáció](docs/api.md) - Hamarosan
- [Unas integráció](docs/unas-integration.md) - Hamarosan

## 🤝 Hozzájárulás

Ez a projekt az [AureusERP](https://github.com/aureuserp/aureuserp) alapjaira épül, amely MIT licensz alatt áll.

## 📄 Licensz

BaraSuite MIT licensz alatt áll. Lásd: [LICENSE.txt](LICENSE.txt)

### Attribution

Ez a szoftver az AureusERP-re épül:
- **Eredeti projekt**: https://github.com/aureuserp/aureuserp
- **Copyright**: (c) 2024 AureusERP Contributors
- **Licensz**: MIT License

## 👨‍💻 Fejlesztő

- **Név**: Laci
- **GitHub**: [@dj-bara](https://github.com/dj-bara)
- **Projekt**: BaraSuite
- **Lokáció**: Budapest, Hungary 🇭🇺

## 🔗 Linkek

- **Demo**: https://demo.barasuite.hu (Hamarosan)
- **Dokumentáció**: https://docs.barasuite.hu (Hamarosan)
- **Support**: https://github.com/dj-bara/BaraERP/issues

## 📊 Projekt Státusz

```
Verzió: 0.1.0 (Planning Phase)
Fejlesztés: Active Development
Utolsó frissítés: 2025. január 14.
```

### Roadmap

- [x] GitHub fork (AureusERP → BaraSuite)
- [x] Docker environment setup
- [x] Initial branding
- [ ] Login redirect bug fix
- [ ] CRM modul fejlesztés (Leads, Deals, Pipeline)
- [ ] Unas API integráció
- [ ] Production deployment (Hetzner/Oracle Cloud)
- [ ] Demo környezet
- [ ] Első 3-5 ügyfél

## 🎯 Jövőkép

BaraSuite célja, hogy a **legkedveltebb magyar ERP+CRM megoldás** legyen kisvállalkozások számára, különösen azok számára, akik Unas webshopot üzemeltetnek.

**Miért BaraSuite?**
- 🇭🇺 Magyar nyelv és support
- 🛒 Natív Unas integráció (egyedi piaci rés!)
- 💰 Átlátható árazás
- 🔓 MIT licensz (kereskedelmi szabadság)
- ⚡ Modern tech stack (Laravel + Filament)
- 🐳 Docker-ready (egyszerű deployment)

---

**BaraSuite** - *Minden, amit egy magyar kisvállalkozásnak szüksége van. Egy helyen.*

---

*Készült ❤️-vel Budapesten*
