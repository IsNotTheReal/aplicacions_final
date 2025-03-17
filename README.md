# Configuración do Proxecto

## Configuración de DISPLAY

- **En clase**: `DISPLAY=${DISPLAY}`
- **En casa**: `DISPLAY=[ip]`

## Credenciais de Administrador de PrestaShop

- **Email**: `a23alexandreme@iessanclemente.net`
- **Contrasinal**: `PrestaAlex`
- **URL para acceder como administrador**: [https://a23alexandreme.lan/admin038renmrzstcdunpprt](https://a23alexandreme.lan/admin038renmrzstcdunpprt)

## Instruccións de Uso

1. **Configura o entorno**:
   - Asegúrate de que a variable `DISPLAY` esté configurada corretamente según a túa ubicación (clase o casa).

2. **Accede ao panel de administración de PrestaShop**:
   - Usa as credenciales proporcionadas para iniciar sesión na URL de administrador.

## Notas Adicionales
   - A base de datos de prestashop xa está gardada en `basededatos/backup-bd.sql`. Só tes que executar `restore.sh` para restaurala e usar prestashop sen ningún problema.
   - Arquivo `.env` para a base de datos de desenvolvemento, e `.env.presta` tanto para produción como para desenvolvemento (Configuración do Prestashop).
   ![.env de desenvolvemento](/imaxe-env/env.png)
   ![.env de desenvolvemento e produción](/imaxe-env/env-presta.png)