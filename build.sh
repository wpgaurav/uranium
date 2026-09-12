#!/usr/bin/env bash
# Zips theme/ into build/uranium-<version>.zip, with the version read from style.css.
set -euo pipefail

cd "$(dirname "$0")"
version=$(sed -n 's/^Version:[[:space:]]*//p' theme/style.css | head -1 | tr -d '\r')
[ -n "$version" ] || { echo "No Version: line in theme/style.css" >&2; exit 1; }

mkdir -p build
out="build/uranium-${version}.zip"
rm -f "$out"

staging=$(mktemp -d)
trap 'rm -rf "$staging"' EXIT
rsync -a --exclude '.DS_Store' --exclude '*.map' --exclude 'node_modules' theme/ "$staging/uranium/"
(cd "$staging" && zip -qr -X "$OLDPWD/$out" uranium)

echo "$out ($(du -h "$out" | cut -f1))"
