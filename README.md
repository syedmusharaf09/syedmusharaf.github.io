# Syed Musharaf A — Portfolio Site (Certificate Template)

A single-file HTML portfolio styled as a formal "Certificate of Professional Record" — a nod to the insurance-policy documents you've worked with. Push to GitHub and host free on GitHub Pages.

## 1. Push it to GitHub

```bash
# from inside this folder
git init
git add .
git commit -m "Add certificate portfolio site"

# create a new repo on github.com first (e.g. "portfolio"), then:
git branch -M main
git remote add origin https://github.com/<your-username>/portfolio.git
git push -u origin main
```

If you already pushed the first template to a repo, either:
- put this in a different repo (e.g. `portfolio-v2`), or
- overwrite `index.html` in the same repo if you want to replace it.

## 2. Turn on GitHub Pages

1. Repo on GitHub → **Settings** → **Pages**.
2. Source: `Deploy from a branch` → Branch: `main`, folder `/ (root)` → **Save**.
3. Live link: `https://<your-username>.github.io/<repo-name>/`

## 3. Add it to LinkedIn

- **Featured section** → add the link.
- **Contact info** → Website.

## Editing later

One file, no build step: open `index.html`, edit the text, save, then `git add . && git commit -m "update" && git push`.
