SELECT Language, COUNT(*) AS country_count
FROM countryLanguage
WHERE (CountryCode, Percentage) IN (
  SELECT CountryCode, MAX(Percentage)
  FROM countryLanguage
  GROUP BY CountryCode
)
GROUP BY Language
ORDER BY country_count DESC
LIMIT 10;