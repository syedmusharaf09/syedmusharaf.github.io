# Syed Musharaf A — Portfolio Site (Top-Nav Template)

A single-file HTML portfolio in the top-navigation, green/teal-gradient style you shared — built entirely from your resume content. Push to GitHub and host free on GitHub Pages.

## About the photo
Your photo is already wired in as `profile.jpg`, sitting next to `index.html` in this folder. Keep both files together — if you rename or move the photo, update the `src="profile.jpg"` in `index.html` to match.

## 1. Push it to GitHub

```bash
git init
git add .
git commit -m "Add top-nav portfolio site"
git branch -M main
git remote add origin https://github.com/<your-username>/portfolio.git
git push -u origin main
```

## 2. Turn on GitHub Pages

1. Repo on GitHub → **Settings** → **Pages**.
2. Source: `Deploy from a branch` → Branch: `main`, folder `/ (root)` → **Save**.
3. Live link: `https://<your-username>.github.io/<repo-name>/`

## 3. Add it to LinkedIn

- **Featured section** → add the link.
- **Contact info** → Website.

## Editing later

One file, no build step: open `index.html`, edit the text, save, then `git add . && git commit -m "update" && git push`.
