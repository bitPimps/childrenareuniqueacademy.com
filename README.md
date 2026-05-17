# Children Are Unique Academy

Website for [Children Are Unique Academy](https://childrenareuniqueacademy.com) — a licensed childcare facility serving children ages 6 weeks to 12 years in St. Louis, MO.

## Tech Stack

Plain HTML, CSS, and JavaScript. No build tools, no frameworks, no dependencies.

## Project Structure

```
├── index.html          # Single-page site (all content, styles, and scripts)
├── CNAME               # GitHub Pages custom domain
├── robots.txt          # Search engine crawl policy
├── favicon.ico
├── apple-touch-icon.png
├── img/
│   ├── logos/          # Academy logo
│   └── pages/          # Section images (philosophy, staff photos, etc.)
└── docs/               # Downloadable PDF enrollment forms
    ├── Child-Care-Enrollment-Form.pdf
    ├── Child-Medical-Examination-Report.pdf
    ├── Healthy-Childcare-Newsletter.pdf
    ├── Infant-and-Toddler-Feeding-and-Care-Plan.pdf
    └── Parents-Health-Statement-for-School-Age-Child.pdf
```

## Local Development

No build step required. Open `index.html` directly in a browser, or serve it locally:

```bash
npx serve .
# or
python3 -m http.server 8080
```

## Deployment

Hosted on GitHub Pages. Pushing to `master` deploys automatically to [childrenareuniqueacademy.com](https://childrenareuniqueacademy.com).

## Schema.org Markup

The site includes two JSON-LD structured data blocks in `<head>`:

| Type | Purpose |
|------|---------|
| `WebSite` | Canonical URL signal; Sitelinks search box eligibility |
| `ChildCare` | LocalBusiness rich results (knowledge panel, map pack, hours) |

To validate after changes, use:
- [Google Rich Results Test](https://search.google.com/test/rich-results)
- [Schema.org Validator](https://validator.schema.org/)

## Business Info

| | |
|---|---|
| **Address** | 3701 Cook Ave, St. Louis, MO 63113 |
| **Phone** | 314-300-8481 |
| **Email** | childrenareuniqueacademy@gmail.com |
| **Hours** | Sunday – Saturday, 6:00 AM – 9:00 PM |
| **Ages Served** | 6 weeks – 12 years |
| **Founded** | 2017 |
