import { Injectable } from '@angular/core';
import { Etudiant } from '../interfaces/Etudiants';
import { RestService } from './rest-service.service';
import { RestResponse } from '../interfaces/RestResponse';

@Injectable({
  providedIn: 'root',
})
export abstract class EtudiantService extends RestService<
  RestResponse<Etudiant>
  > {
  override uri(): string {
    return 'etudiants';
  }
}
