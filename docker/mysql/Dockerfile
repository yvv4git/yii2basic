FROM percona:5.7
#FROM mysql:5.6

ENV MYSQL_DATABASE=company \
    MYSQL_USER=user \
    MYSQL_PASSWORD=pass \
    MYSQL_ROOT_PASSWORD=secret

COPY --chown=mysql ./conf/ /etc/my.cnf.d/
COPY --chown=mysql ./data/ /docker-entrypoint-initdb.d/

RUN chmod 0444 /etc/my.cnf.d/mysql.cnf && chmod 0444 /etc/my.cnf.d/mysqld.cnf
#CMD ["mysqld"]