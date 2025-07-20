#!/bin/bash
if ! pidof tor > /dev/null; then
    echo "[+] Starting Tor service..."
    sudo service tor start
else
    echo "[✓] Tor is already running."
fi
