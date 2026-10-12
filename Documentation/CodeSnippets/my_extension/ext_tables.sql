-- The sorting of each side of a partnership. TYPO3 creates all other
-- columns from the TCA.
CREATE TABLE tx_myextension_partnership (
  conference_sorting int(11) unsigned DEFAULT '0' NOT NULL,
  partner_sorting int(11) unsigned DEFAULT '0' NOT NULL
);

-- TYPO3 does not create columns for fields of type user
CREATE TABLE fe_users (
  tx_myextension_badge_name varchar(255) DEFAULT '' NOT NULL
);

-- TYPO3 does not create columns for fields of type none
CREATE TABLE tx_myextension_talk (
  feedback_opened int(11) DEFAULT '0' NOT NULL,
  rating decimal(2,1) DEFAULT '0.0' NOT NULL,
  feedback_count int(11) unsigned DEFAULT '0' NOT NULL
);
