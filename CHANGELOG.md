# Changelog

A BaraSuite projekt változásainak nyilvántartása.

A formátum a [Keep a Changelog](https://keepachangelog.com/hu/1.0.0/) alapján,
és ez a projekt követi a [Semantic Versioning](https://semver.org/lang/hu/) szabályokat.

## [Unreleased]

### Tervezett
- CRM modul: Leads, Deals, Sales Pipeline
- Unas webshop integráció (rendelések, ügyfelek, termékek, készlet)
- Email integráció (Gmail, Outlook)
- Billingo/Számlázz.hu integráció
- Production deployment setup
- Demo környezet (demo.barasuite.hu)

## [0.1.0] - 2025-01-14

### Hozzáadva
- Kezdeti GitHub fork (AureusERP → BaraSuite)
- BaraSuite branding (README.md, LICENSE.txt)
- Docker Compose környezet setup
- Magyar .env.example konfiguráció
- CHANGELOG.md verziókövetés
- MIT License dokumentáció
- composer.json testreszabás (package info)

### Módosítva
- APP_NAME: AureusERP → BaraSuite
- Locale: en → hu (magyar nyelvű rendszer)
- Timezone: UTC → Europe/Budapest

### Ismert problémák
- Login redirect loop (session configuration issue)
- Redis connection opcionális konfigurálás szükséges

---

## Verziószámozás

A projekt a következő verziószámozást követi:

- **MAJOR** verzió: amikor kompatibilitást törő API változás van
- **MINOR** verzió: új funkció hozzáadása visszafelé kompatibilis módon
- **PATCH** verzió: hibajavítások visszafelé kompatibilis módon

Példa: `1.2.3`
- `1` = Major verzió
- `2` = Minor verzió
- `3` = Patch verzió

---

## Changelog Kategóriák

- **Hozzáadva** (Added) - Új funkciók
- **Módosítva** (Changed) - Meglévő funkciók változásai
- **Elavult** (Deprecated) - Hamarosan megszűnő funkciók
- **Eltávolítva** (Removed) - Eltávolított funkciók
- **Javítva** (Fixed) - Hibajavítások
- **Biztonság** (Security) - Biztonsági javítások

---

## Projekt Mérföldkövek

### Fázis 1: Alaprendszer (Hónap 1) ✅ Folyamatban
- [x] GitHub fork
- [x] Docker environment
- [x] Initial branding
- [ ] Login bug fix
- [ ] Filament UI testreszabás
- [ ] Magyar fordítás (alapok)

### Fázis 2: CRM Bővítés (Hónap 2)
- [ ] Leads modul
- [ ] Deals modul
- [ ] Sales Pipeline (Kanban)
- [ ] Email integráció

### Fázis 3: Unas Integráció (Hónap 3)
- [ ] Unas API Client
- [ ] Order sync
- [ ] Customer sync
- [ ] Product sync
- [ ] Stock sync (kétirányú)

### Fázis 4: Production (Hónap 4)
- [ ] Hetzner/Oracle Cloud deployment
- [ ] Multi-tenant architecture
- [ ] Backup rendszer
- [ ] Monitoring
- [ ] Demo környezet

### Fázis 5: Marketing & Ügyfelek (Hónap 5-6)
- [ ] Landing page
- [ ] Demo videók
- [ ] Első 3-5 ügyfél
- [ ] Pilot program

---

**Projekt kezdete:** 2025. január 13.  
**Jelenlegi verzió:** 0.1.0 (Planning Phase)  
**Következő verzió:** 0.2.0 (MVP - várható: 2025. április)

---

*A változások részletes leírását lásd: [GitHub Commits](https://github.com/dj-bara/BaraERP/commits/main)*
