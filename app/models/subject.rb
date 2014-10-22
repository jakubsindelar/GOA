class Subject < ActiveRecord::Base
belongs_to :teacher
has_many :teacher
end
