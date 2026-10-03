**CRUD - Brinquedaria**

Este sistema permite ter a gestão dos brinquedos de um stoque, e assim como um CRUD normal ele possúi as mesmas funcionalidades: criar, ler, atualizar, deletar.

Ao entrar você pode adicionar um novo brinquedo no sistema, escolhendo suas características: 

+ Nome;
+ Categoria;
+ Idade Mínima para uma criança usar;
+ Preço;
+ Quantidade dele no estoque.

Também é possível Editar os brinquedos e excluí-los.

Este sistema foi implementado com Prepared Statement para impedir que um usuario manipule os dados por meio de SQL injection, garantindo maior segurança dos dados. 