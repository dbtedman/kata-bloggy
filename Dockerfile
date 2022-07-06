FROM wordpress:6.0

COPY --chown=www-data:www-data ./ /app/

RUN chmod +x /app/automation-setup-wordpress.sh
