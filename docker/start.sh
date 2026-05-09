#!/bin/sh
set -eu

PORT="${PORT:-10000}"
case "$PORT" in
  *[!0-9]*)
    echo "Invalid PORT value: ${PORT}" >&2
    exit 1
    ;;
esac

sed -ri "s/^Listen[[:space:]]*80$/Listen ${PORT}/" /etc/apache2/ports.conf
sed -ri "s/^<VirtualHost \*:80>/<VirtualHost *:${PORT}>/" /etc/apache2/sites-available/000-default.conf

grep -q "^Listen ${PORT}$" /etc/apache2/ports.conf || {
  echo "Failed to configure Apache listen port: ${PORT}" >&2
  exit 1
}

grep -q ":${PORT}>" /etc/apache2/sites-available/000-default.conf || {
  echo "Failed to configure Apache virtual host port: ${PORT}" >&2
  exit 1
}

exec apache2-foreground
