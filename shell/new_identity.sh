#!/bin/bash
# Make sure you have 'ControlPort 9051' and 'HashedControlPassword' in /etc/tor/torrc

echo -e 'AUTHENTICATE "your_password_here"\nSIGNAL NEWNYM\nQUIT' | nc 127.0.0.1 9051
