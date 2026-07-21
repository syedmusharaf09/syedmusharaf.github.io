# Syed Musharaf A — Portfolio Site (Sidebar Template)

A single-file HTML portfolio in the dark, sidebar-navigation style you shared — built entirely from your resume content. Push to GitHub and host free on GitHub Pages.

## 1. Push it to GitHub

```bash
# from inside this folder
git init
git add .
git commit -m "Add sidebar portfolio site"

# create a new repo on github.com first, then:
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

One file, no build step: open `index.html`, edit the text between the tags, save, then `git add . && git commit -m "update" && git push`.
