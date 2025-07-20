# Tor Scraper Viewer

A Tor-based scraper and web viewer for .onion sites. 

## Features
- Web input for onion URLs
- Python scraper using Tor proxy
- PHP interface to view scraped content

## Setup
```bash
sudo apt install tor
pip install -r requirements.txt
bash shell/start_tor.sh
```

## Usage
1. Run `start_tor.sh`
2. Access `index.php` in browser (via localhost server)
3. Enter a .onion URL to scrape

**Note:** Make sure Tor is running and port 9050 is open.

