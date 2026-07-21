# Syed Musharaf A — Portfolio Site

A single-file HTML portfolio built from your resume, ready to push to GitHub and host for free on GitHub Pages.

## 1. Push it to GitHub

```bash
# from inside the "portfolio" folder
git init
git add .
git commit -m "Add portfolio site"

# create a new repo on github.com first (e.g. "portfolio"), then:
git branch -M main
git remote add origin https://github.com/<your-username>/portfolio.git
git push -u origin main
```

## 2. Turn on GitHub Pages

1. Go to your repo on GitHub → **Settings** → **Pages**.
2. Under "Build and deployment", set **Source** to `Deploy from a branch`.
3. Set **Branch** to `main` and folder to `/ (root)`, then **Save**.
4. GitHub gives you a live link, usually:
   `https://<your-username>.github.io/portfolio/`

It can take a minute or two to go live.

## 3. Add it to LinkedIn

- **Featured section**: Profile → "Add profile section" → Featured → add the GitHub Pages link.
- **Contact info**: Add it as your Website under "Edit contact info".
- **Headline/About**: Drop the link in your About section too.

## Editing later

Everything is in `index.html` — one file, no build step. Open it in any text editor, change the text between the tags, save, then `git add . && git commit -m "update" && git push`.
