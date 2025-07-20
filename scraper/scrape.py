import requests
import sys
import json

def scrape_onion(url):
    session = requests.Session()
    session.proxies = {
        'http': 'socks5h://127.0.0.1:9050',
        'https': 'socks5h://127.0.0.1:9050'
    }
    try:
        res = session.get(url, timeout=30)
        data = {
            "url": url,
            "status": res.status_code,
            "content": res.text[:5000]  # limit output
        }
    except Exception as e:
        data = {
            "url": url,
            "status": "error",
            "content": str(e)
        }
    with open("../data/results.json", "w") as f:
        json.dump(data, f)

if __name__ == "__main__":
    if len(sys.argv) > 1:
        scrape_onion(sys.argv[1])
    else:
        print("Usage: python3 scrape.py <.onion URL>")

