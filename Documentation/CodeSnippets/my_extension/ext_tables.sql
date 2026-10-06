-- The sorting of each side of a partnership. TYPO3 creates all other
-- columns from the TCA.
CREATE TABLE tx_myextension_partnership (
  conference_sorting int(11) unsigned DEFAULT '0' NOT NULL,
  partner_sorting int(11) unsigned DEFAULT '0' NOT NULL
);
