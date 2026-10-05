import FormEngineValidation from '@typo3/backend/form-engine-validation.js';

/**
 * Removes the leading "#" of a hashtag while the editor types,
 * like HashtagEvaluation::evaluateFieldValue() does on saving
 */
export class FormEngineEvaluation {
  static registerCustomEvaluation(name) {
    FormEngineValidation.registerCustomEvaluation(name, FormEngineEvaluation.evaluateHashtag);
  }

  static evaluateHashtag(value) {
    return value.replace(/^#+/, '');
  }
}
